<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logistics_service".
 *
 * @property integer $id
 * @property integer $logistics_id
 * @property integer $service
 * @property string $unit_price
 * @property integer $qty
 * @property string $taxable_value
 * @property integer $vat_id
 * @property string $vat_amount
 * @property integer $vat_percentage
 * @property string $total
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 *
 * @property Logistics $logistics
 * @property Service $service0
 * @property TaxMaster $vat
 */
class LogisticsService extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logistics_service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logistics_id', 'service', 'qty', 'vat_id', 'vat_percentage', 'status', 'CB', 'UB'], 'integer'],
            [['unit_price', 'taxable_value', 'vat_amount', 'total'], 'number'],
            [['service', 'unit_price'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['logistics_id'], 'exist', 'skipOnError' => true, 'targetClass' => Logistics::className(), 'targetAttribute' => ['logistics_id' => 'id']],
            [['service'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service' => 'id']],
            [['vat_id'], 'exist', 'skipOnError' => true, 'targetClass' => TaxMaster::className(), 'targetAttribute' => ['vat_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logistics_id' => 'Logistics ID',
            'service' => 'Service',
            'unit_price' => 'Unit Price',
            'qty' => 'Qty',
            'taxable_value' => 'Taxable Value',
            'vat_id' => 'Vat ID',
            'vat_amount' => 'Vat Amount',
            'vat_percentage' => 'Vat Percentage',
            'total' => 'Total',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogistics()
    {
        return $this->hasOne(Logistics::className(), ['id' => 'logistics_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService0()
    {
        return $this->hasOne(Service::className(), ['id' => 'service']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVat()
    {
        return $this->hasOne(TaxMaster::className(), ['id' => 'vat_id']);
    }
}
