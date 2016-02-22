<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemSiswa;

/**
 * PemSiswaSearch represents the model behind the search form about `frontend\models\PemSiswa`.
 */
class PemSiswaSearch extends PemSiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_siswa_id', 'user_id', 'status_id', 'pembimbing_id'], 'integer'],
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
        $query = PemSiswa::find();

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
            'p_siswa_id' => $this->p_siswa_id,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id,
            'pembimbing_id' => $this->pembimbing_id,
        ]);

        return $dataProvider;
    }
}
