<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "proposal".
 *
 * @property integer $proposal_id
 * @property string $judul
 * @property string $descs
 * @property string $file
 * @property integer $mahasiswa_id
 * @property integer $dosen_id
 * @property integer $dosen_id2
 */
class Proposal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proposal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'descs'], 'required'],
            [['judul', 'descs'], 'string'],
            [['mahasiswa_id', 'dosen_id', 'dosen_id2'], 'integer'],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proposal_id' => 'Proposal ID',
            'judul' => 'Judul',
            'descs' => 'Descs',
            'file' => 'File',
            'mahasiswa_id' => 'Mahasiswa ID',
            'dosen_id' => 'Dosen ID',
            'dosen_id2' => 'Dosen Id2',
        ];
    }
    

    
}
