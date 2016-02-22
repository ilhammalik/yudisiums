<?php

namespace frontend\controllers;
use frontend\models\DDosen;
use frontend\models\DafPem;
use frontend\models\PemSiswa;
use Yii;
use yii\data\ActiveDataProvider;
use \mPDF;
use kartik\mpdf\Pdf;

class HonorController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$dosen = DDosen::find()->where('user_id='.Yii::$app->user->id);
        $dataDosen = new ActiveDataProvider([
            'query' => $dosen,
        ]);
         return $this->render('index', [
            'dataDosen' => $dataDosen,
        ]);
    }


    public function actionPdf($id) {
        $this->layout = 'pdf';
        $model = DDosen::find()->where('p_dosen_id='.$id)->one();
        $model2 = DafPem::find()->where('pembimbing_id='.$id)->one();
        $model3 = PemSiswa::find()->where('dosen_id='.$id)->one();

        $content = $this->render('/honor/cetak_honor', [
            'model' => $model,
            'model2' => $model2,
            'model3' => $model3,
           
        ]);
        $mpdf = new mPDF('utf-8', 'A4-L');
        $mpdf->AddPage('P', '', '', '', '', 15, 15, 5, 1, 5, 5);
        $mpdf->WriteHTML($content);
        $mpdf->Output('Pengeluaran RIll', I);
    }

}
