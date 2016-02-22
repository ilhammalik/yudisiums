<?php

namespace common\components;

use yii\base\Component;
use common\models\User;
use common\models\Actionlog;
use common\models\Logkategori;
use yii\helpers\Url;
use yii\db\Query;
use Yii;
use yii\helpers\Html;
use common\models\Gol;
use common\models\Struk;

class HelperUnit extends Component {

    //aliasa Untuk Pagu admin
      public function Apagu($kw) {
        //fungsi untuk memanggil kwitan i110000,120000,130000,161100,151000
        switch ($kw) {
            case 110000 : {
                    $kw = 'Deputi PI';
                }
                break;
                 case 120000: {
                    $kw = 'Deputi PKN';
                }
                break;
                case 130000: {
                    $kw = 'Sekretariat Utama';
                }
                break;
                  case 161100: {
                    $kw = 'Inspektorat';
                }
                break;
                  case 151000: {
                    $kw = 'Balai Diklat';
                }
                break;
                  case 151000: {
                    $kw = 'Balai Diklat';
                }
                break;
                //
                  case 111000: {
                    $kw = 'DIFRZR';
                }
                break;
                  case 112000: {
                    $kw = 'DPIBN';
                }
                break;
                 case 113000: {
                    $kw = 'DPFRZR';
                }
                break;
                  case 114000: {
                    $kw = 'DI2BN';
                }
                break;
                    case 115000: {
                    $kw = 'DK2N';
                }
                break;
                case 121000: {
                    $kw = 'P2STPIBN';
                }
                break;
                case 122000: {
                    $kw = 'P2STPFRZR';
                }
                break;
                case 123000: {
                    $kw = 'DP2FRZR';
                }
                break;
                case 124000: {
                    $kw = 'DP2IBN';
                }
                break;

                 case 131000: {
                    $kw = 'Biro Perencanaan';
                }
                break;
                 case 132000: {
                    $kw = 'Biro Umum';
                }
                break;
                case 133000: {
                    $kw = 'BHO';
                }
                break;

        }
        return $kw;
    }  

     public function Satker($id) {
        $gole = \backend\models\DafUnitSatker::find()
                ->where(['kd_satker' => $id])
                ->one();
        return $gole->unit_id;
    }

     public function Out($id) {
        $gole = \backend\models\DafSuboutput::find()
                ->where(['suboutput_id' => $id])
                ->one();
        return $gole->unit_id;
    }

    public function Pagu($id) {
     $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
     $gole = Yii::$app->db->createCommand("SELECT 
     sum(alokasi_sub_mak) as total
     FROM v_pagu where tahun=".$tahun." and unit_id =".$id)->queryScalar();

        if(!empty($gole)){
        return $gole;

    }else{
        return '0';
    }
    }

    //pagu untuk eselon tiga
    // public function Pag($id) {
    //     $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
    //     $gole = Yii::$app->db->createCommand("SELECT sum(c.alokasi_sub_mak) FROM serasi2015_sql.news_detail_keg a
    //         INNER JOIN serasi2015_sql.news_nas_suboutput b on a.suboutput_id=b.suboutput_id
    //         INNER JOIN serasi2015_sql.news_sub_mak_tahun c on  b.suboutput_id=c.suboutput_id
    //         WHERE b.unit_id3='".$id."' and c.tahun=".$tahun)->queryScalar();
    //     if(!empty($gole)){
    //         return $gole;
    //     }else{
    //         return '0';
    //     }
    // }

     public function Real($id) {
     $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');

     $gole = Yii::$app->db->createCommand("SELECT SUM(jml) as JUMLah FROM `simpel_rincian_biaya` as g WHERE id_kegiatan in 
(SELECT a.id_kegiatan FROM simpel_keg a  LEFT JOIN 
 pegawai.daf_unit b ON a.unit_id=b.unit_id WHERE status in(2,3,4) and g.bukti_kwitansi in(1,2) and 
 b.unit_id 
 IN (SELECT c.unit_id FROM  pegawai.daf_unit c  WHERE a.status in (2,3,4) and c.unit_parent_id ='".$id."'))")->queryScalar();
        
        if(!empty($gole)){
        return $gole;

    }else{
        return '0';
    }
    }
    //menghitung eselon 3
     public function RealEse($id) {
     $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');

     $gole = Yii::$app->db->createCommand("SELECT SUM(jml) as JUMLah FROM `simpel_rincian_biaya` as g WHERE id_kegiatan in 
(SELECT a.id_kegiatan FROM simpel_keg a  LEFT JOIN 
 pegawai.daf_unit b ON a.unit_id=b.unit_id WHERE status in(2,3,4) and tgl_mulai between '".$_GET['tgl_mulai']."' and '".$_GET['tgl_kembali']."' and g.bukti_kwitansi in(1,2) and 
 b.unit_id 
 IN (SELECT c.unit_id FROM  pegawai.daf_unit c  WHERE a.status in (2,3,4) and c.unit_id ='".$id."'))")->queryScalar();
        
        if(!empty($gole)){
        return $gole;

    }else{
        return '0';
    }
    }

         public function Realrekap($bln) {
            $sql = "SELECT a.unit_id, a.tgl_mulai, b.jml FROM simpel_keg as a 
                    LEFT JOIN simpel_rincian_biaya as b on a.id_kegiatan=b.id_kegiatan
                    LEFT JOIN pegawai.daf_unit as c on a.unit_id3=b.unit_id
                    where c.unit_parent_id='".$bln."'";
             $gole = Yii::$app->db->createCommand($sql)->queryScalar();
            
         }
        //fungsi hitung kegiatan
         public function HitungKeg($id) {
     $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');

     $gole = Yii::$app->db->createCommand("SELECT count(detail_id) as jumlah FROM `serasi2015_sql.new_detail_keg` WHERE detail_id in 
    (SELECT a.detail_id FROM serasi2015_sql a  
    LEFT JOIN 
        serasi2015_sql.new_detail_keg_mak b ON a.detail_id=b.detail_id WHERE 
        b.detail_id 
    LEFT JOIN 
        serasi2015_sql.new_sub_mak_tahun b ON a.sub_mak_id=b.sub WHERE 
        b.detail_id 
    IN (SELECT c.unit_id FROM  pegawai.daf_unit c  WHERE c.unit_parent_id ='".$id."'))")->queryScalar();
        if(!empty($gole)){
        return $gole;

    }else{
        return '0';
    }
    }

    



     public function Unit($id) {
        $gole = \common\models\DaftarUnit::find()
                ->where(['unit_id' => $id])
                ->one();
        return $gole->nama;
    }

     public function Ese($id) {
        $gole = \common\models\DaftarUnit::find()
                ->where(['unit_id' => $id])
                ->one();
        return $gole->eselon;
    }

     public function Pegawai($id) {
        $gole = \common\models\Pegawai::find()
                ->where(['nip' => $id])
                ->one();
        return $gole->nama_cetak;
    }

    public function Pegawais($id) {
        $gole = \common\models\Pegawai::find()
                ->where(['nip' => $id])
                ->one();
        return $gole;
    }

    

    public function Ppk($id) {
        $gole = \backend\models\DafPpk::find()
                ->where(['unit_id' => $id,'tahun'=>2014])
                ->one();
        return $gole->nip_ppk;
    }



     public function ParentUnit($id) {
        $gole = \common\models\DaftarUnit::find()
                ->where(['unit_id' => $id])
                ->one();
        return $gole->unit_parent_id;
    }

      public function AnakUnit($id) {
        $gole = \common\models\DaftarUnit::find()
                ->where(['unit_parent_id' => $id])
                ->one();
        return $gole->unit_id;
    }

    public function Count($id){
        
        $sql = "SELECT  count(a.detail_id) FROM serasi2015_sql.news_detail_keg as a 
         LEFT JOIN serasi2015_sql.news_sub_mak_tahun as b on a.suboutput_id=b.suboutput_id 
         LEFT JOIN serasi2015_sql.news_nas_suboutput as c on a.suboutput_id=c.suboutput_id
         LEFT JOIN fix_simpel.simpel_keg g on g.detail_id = a.detail_id
         LEFT JOIN pegawai.daf_unit as d on c.unit_id=d.unit_parent_id
        where a.jenis_detail_id in (3,4,5) and (b.kode_mak= 524114 or b.kode_mak= 524113 or b.kode_mak= 524111 or b.kode_mak= 524119 ) and g.detail_id IS NULL and d.unit_parent_id='".$id."' group by a.detail_id order by a.renc_tgl_mulai desc";
        
        $count = Yii::$app->db->createCommand($sql)->queryScalar();
        
        $data = "SELECT COUNT(a.detail_id) FROM serasi2015_sql.news_detail_keg as a
                       
                        where a.detail_id=".$sql;
        $count2 = Yii::$app->db->createCommand($sql)->queryScalar();
       return ;
    }

    //pagu pimpinan2

    public function PaguPim($id){
        // $sql = "SELECT SUM( alokasi_sub_mak ) 
        //         FROM  serasi2015_sql.news_nas_suboutput a
        //         INNER JOIN serasi2015_sql.news_sub_mak_tahun b ON a.suboutput_id = b.suboutput_id
        //         WHERE  a.unit_id3='".$id."'";
        $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
     $gole = Yii::$app->db->createCommand("SELECT 
     sum(alokasi_sub_mak) as total
     FROM v_pagu where tahun=".$tahun." and unit_id3 =".$id)->queryScalar();

        if(!empty($gole)){
        return $gole;

    }else{
        return '0';
    }
    }
    public function PaguUser($id){
        // $sql = "SELECT SUM( alokasi_sub_mak ) 
        //         FROM  serasi2015_sql.news_nas_suboutput a
        //         INNER JOIN serasi2015_sql.news_sub_mak_tahun b ON a.suboutput_id = b.suboutput_id
        //         WHERE  a.unit_id3='".$id."'";
        $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
     $gole = Yii::$app->db->createCommand("SELECT 
     sum(alokasi_sub_mak) as total
     FROM v_pagu where tahun=".$tahun." and unit_id =".$id)->queryScalar();

        if(!empty($gole)){
        return $gole;

    }else{
        return '0';
    }
    }
    //pimpinan1
    public function PaguSerasi($id){
        $sql = "SELECT sum(c.har_sat_real) FROM serasi2015_sql.news_detail_keg as a
                INNER JOIN serasi2015_sql.news_nas_suboutput as b on a.suboutput_id=b.suboutput_id
                INNER JOIN serasi2015_sql.news_sub_mak_tahun as g on b.suboutput_id=g.suboutput_id
                INNER JOIN serasi2015_sql.news_lap_rincian as c on a.detail_id=c.detail_id
                WHERE b.unit_id=".$id." and a.jenis_detail_id  in (2) and g.kode_mak in (524114)";
        $count = Yii::$app->db->createCommand($sql)->queryScalar();
        return $count;
    }
    //pagu realisasi serasi user  & pimpinan 2
      public function PaguSerasii($id){
        $sql = "SELECT sum(c.har_sat_real) FROM serasi2015_sql.news_detail_keg as a
                INNER JOIN serasi2015_sql.news_nas_suboutput as b on a.suboutput_id=b.suboutput_id
                INNER JOIN serasi2015_sql.news_sub_mak_tahun as g on b.suboutput_id=g.suboutput_id
                INNER JOIN serasi2015_sql.news_lap_rincian as c on a.detail_id=c.detail_id
                WHERE b.unit_id3=".$id." and a.jenis_detail_id  in (2) and g.kode_mak in (524114)";
       
        $count = Yii::$app->db->createCommand($sql)->queryScalar();
        return $count;
    }

       public function PaguSerasiEse($id){
        $sql = "SELECT sum(c.har_sat_real) FROM serasi2015_sql.news_detail_keg as a
                INNER JOIN serasi2015_sql.news_nas_suboutput as b on a.suboutput_id=b.suboutput_id
                INNER JOIN serasi2015_sql.news_sub_mak_tahun as g on b.suboutput_id=g.suboutput_id
                INNER JOIN serasi2015_sql.news_lap_rincian as c on a.detail_id=c.detail_id
                WHERE b.unit_id3=".$id." and a.jenis_detail_id in (2) and g.kode_mak in (524114)";
        $count = Yii::$app->db->createCommand($sql)->queryScalar();
        return $count;
    }

    public function Kotas($id){
        $data = \backend\models\DafKota::find()
                ->where(['kab_id' => $id])
                ->one();
        return $data;
    }


        public function Propinsis($id){
        $data = \backend\models\DafPropinsi::find()
                ->where(['propinsi_id' => $id])
                ->one();
        return $data;
    }

      public function Negaras($id){
        $data = \backend\models\DafNegara::find()
                ->where(['kode_negara' => $id])
                ->one();
        return $data->nama;
    }

      public function Kode($id){
        $data = \backend\models\DafKom::find()
                ->where(['subkomponen_id' => $id])
                ->one();
                switch ($data['hide']) {
                    case 1:
                       return "";
                        break;
                    case 0:
                        return $data->kode_subkomponen.'.';
                        break;
                }
        
    }

      public function NonPegawai($id){
        $data = \backend\models\DafNoPegawai::find()
                ->where(['no_pegawai_id' => $id])
                ->one();
        return $data;
    }


}
