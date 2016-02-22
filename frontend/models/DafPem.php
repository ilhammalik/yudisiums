<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "daf_pembimbing".
 *
 * @property integer $pembimbing_id
 * @property integer $prodi_id
 * @property integer $status_id
 */
class DafPem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daf_pembimbing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prodi_id', 'status_id'], 'required'],
            [['prodi_id', 'status_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pembimbing_id' => 'Pembimbing ID',
            'prodi_id' => 'Prodi ID',
            'status_id' => 'Status ID',
        ];
    }
}
