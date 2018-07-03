<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LogisticsService;

/**
 * LogisticsServiceSearch represents the model behind the search form about `common\models\LogisticsService`.
 */
class LogisticsServiceSearch extends LogisticsService
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'logistics_id', 'service', 'qty', 'vat_id', 'vat_percentage', 'status', 'CB', 'UB'], 'integer'],
            [['unit_price', 'taxable_value', 'vat_amount', 'total'], 'number'],
            [['DOC','DOU'], 'safe'],
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
        $query = LogisticsService::find();

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
            'logistics_id' => $this->logistics_id,
            'service' => $this->service,
            'unit_price' => $this->unit_price,
            'qty' => $this->qty,
            'taxable_value' => $this->taxable_value,
            'vat_id' => $this->vat_id,
            'vat_amount' => $this->vat_amount,
            'vat_percentage' => $this->vat_percentage,
            'total' => $this->total,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
        ]);

        return $dataProvider;
    }
}
