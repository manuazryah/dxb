<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logistic_reports".
 *
 * @property integer $id
 * @property integer $logistics_id
 * @property string $invoice_no
 * @property string $report
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class LogisticReports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logistic_reports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logistics_id', 'status', 'CB', 'UB'], 'integer'],
            [['report'], 'string'],
            [['DOC', 'DOU'], 'safe'],
            [['invoice_no'], 'string', 'max' => 100],
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
            'invoice_no' => 'Invoice No',
            'report' => 'Report',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
