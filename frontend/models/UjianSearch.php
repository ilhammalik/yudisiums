<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ujian;

/**
 * UjianSearch represents the model behind the search form about `frontend\models\Ujian`.
 */
class UjianSearch extends Ujian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uji_id', 'dosen_id', 'penguji_id', 'mahasiswa_id'], 'integer'],
            [['tgl_uji', 'tmpt', 'nilai'], 'safe'],
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
        $query = Ujian::find();

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
            'uji_id' => $this->uji_id,
            'dosen_id' => $this->dosen_id,
            'penguji_id' => $this->penguji_id,
            'mahasiswa_id' => $this->mahasiswa_id,
        ]);

        $query->andFilterWhere(['like', 'tgl_uji', $this->tgl_uji])
            ->andFilterWhere(['like', 'tmpt', $this->tmpt])
            ->andFilterWhere(['like', 'nilai', $this->nilai]);

        return $dataProvider;
    }
}
