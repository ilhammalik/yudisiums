<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Proposal;

/**
 * ProposalSearch represents the model behind the search form about `frontend\models\Proposal`.
 */
class ProposalSearch extends Proposal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proposal_id', 'mahasiswa_id', 'dosen_id', 'dosen_id2'], 'integer'],
            [['judul', 'descs', 'file'], 'safe'],
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
        $query = Proposal::find();

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
            'proposal_id' => $this->proposal_id,
            'mahasiswa_id' => $this->mahasiswa_id,
            'dosen_id' => $this->dosen_id,
            'dosen_id2' => $this->dosen_id2,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'descs', $this->descs])
            ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
