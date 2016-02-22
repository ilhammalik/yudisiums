<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property integer $prodi_id
 * @property string $nama
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prodi_id' => 'Prodi ID',
            'nama' => 'Nama',
        ];
    }
}
