<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "daf_gaji".
 *
 * @property integer $gaji_id
 * @property string $nama
 * @property integer $jenis_id
 */
class DafGaji extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daf_gaji';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_id'], 'required'],
            [['jenis_id'], 'integer'],
            [['nama'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gaji_id' => 'Gaji ID',
            'nama' => 'Nama',
            'jenis_id' => 'Jenis ID',
        ];
    }
}
