<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "d_pem_siswa".
 *
 * @property integer $p_siswa_id
 * @property integer $user_id
 * @property integer $status_id
 * @property integer $pembimbing_id
 */
class PemSiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd_pem_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'status_id', 'pembimbing_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_siswa_id' => 'P Siswa ID',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'pembimbing_id' => 'Pembimbing ID',
        ];
    }
}
