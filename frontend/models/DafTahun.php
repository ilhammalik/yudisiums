<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "daf_tahun".
 *
 * @property integer $id_tahun
 * @property string $nama
 * @property integer $status_id
 */
class DafTahun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daf_tahun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'status_id'], 'required'],
            [['nama'], 'string'],
            [['status_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tahun' => 'Id Tahun',
            'nama' => 'Nama',
            'status_id' => 'Status ID',
        ];
    }
}
