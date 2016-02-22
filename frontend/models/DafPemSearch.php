<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DafPem;

/**
 * DafPemSearch represents the model behind the search form about `frontend\models\DafPem`.
 */
class DafPemSearch extends DafPem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pembimbing_id', 'prodi_id', 'status_id', 'dosen_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DafPem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pembimbing_id' => $this->pembimbing_id,
            'prodi_id' => $this->prodi_id,
            'status_id' => $this->status_id,
            'dosen_id' => $this->dosen_id,
        ]);

        return $dataProvider;
    }
}
