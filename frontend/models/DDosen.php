<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "d_p_dosen".
 *
 * @property integer $p_dosen_id
 * @property string $honor
 * @property integer $status_p_id
 * @property integer $status_id
 * @property integer $pembimbing_id
 * @property integer $user_id
 */
class DDosen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd_p_dosen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['honor'], 'required'],
            [['status_id', 'pembimbing_id', 'user_id'], 'integer'],
            [['honor'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_dosen_id' => 'P Dosen ID',
            'honor' => 'Honor',
            'status_p_id' => 'Status P ID',
            'status_id' => 'Status ID',
            'pembimbing_id' => 'Pembimbing ID',
            'user_id' => 'User ID',
        ];
    }
}
