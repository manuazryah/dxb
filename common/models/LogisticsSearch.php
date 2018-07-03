<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Logistics;

/**
 * LogisticsSearch represents the model behind the search form about `common\models\Logistics`.
 */
class LogisticsSearch extends Logistics
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'debtor', 'status', 'CB', 'UB'], 'integer'],
            [['invoice_no', 'invoice_date', 'eta', 'etd', 'purpose_of_visit', 'voyage', 'vessel', 'port', 'cargo', 'job_ref', 'GRT', 'LOA', 'remarks', 'DOC', 'DOU'], 'safe'],
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
        $query = Logistics::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'invoice_date' => $this->invoice_date,
            'eta' => $this->eta,
            'etd' => $this->etd,
            'debtor' => $this->debtor,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'invoice_no', $this->invoice_no])
            ->andFilterWhere(['like', 'purpose_of_visit', $this->purpose_of_visit])
            ->andFilterWhere(['like', 'voyage', $this->voyage])
            ->andFilterWhere(['like', 'vessel', $this->vessel])
            ->andFilterWhere(['like', 'port', $this->port])
            ->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'job_ref', $this->job_ref])
            ->andFilterWhere(['like', 'GRT', $this->GRT])
            ->andFilterWhere(['like', 'LOA', $this->LOA])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
