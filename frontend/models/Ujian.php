<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ujian".
 *
 * @property integer $uji_id
 * @property string $tgl_uji
 * @property string $tmpt
 * @property integer $dosen_id
 * @property integer $penguji_id
 * @property integer $mahasiswa_id
 * @property string $nilai
 */
class Ujian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ujian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_uji', 'tmpt', 'dosen_id', 'penguji_id', 'mahasiswa_id', 'nilai'], 'required'],
            [['tmpt'], 'string'],
            [['dosen_id', 'penguji_id', 'mahasiswa_id'], 'integer'],
            [['tgl_uji'], 'string', 'max' => 255],
            [['nilai'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uji_id' => 'Uji ID',
            'tgl_uji' => 'Tgl Uji',
            'tmpt' => 'Tmpt',
            'dosen_id' => 'Dosen ID',
            'penguji_id' => 'Penguji ID',
            'mahasiswa_id' => 'Mahasiswa ID',
            'nilai' => 'Nilai',
        ];
    }
}
