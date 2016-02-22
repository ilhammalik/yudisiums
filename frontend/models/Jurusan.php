<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property integer $jurusan_id
 * @property string $nama
 * @property integer $prodi_id
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'prodi_id'], 'required'],
            [['nama'], 'string'],
            [['prodi_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jurusan_id' => 'Jurusan ID',
            'nama' => 'Nama',
            'prodi_id' => 'Prodi ID',
        ];
    }
}
