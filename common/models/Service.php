<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property integer $service_name
 * @property string $unit_price
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class Service extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['status', 'CB', 'UB', 'set_as_default', 'vat'], 'integer'],
            [['unit_price', 'service_name'], 'required'],
            [['unit_price', 'usd_amount'], 'number'],
            [['service_name', 'DOC', 'DOU', 'category'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'service_name' => 'Service Name',
            'unit_price' => 'AED Price',
            'usd_amount' => 'USD Price',
            'category' => 'Category',
            'vat' => 'VAT',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
