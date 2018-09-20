<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logistics".
 *
 * @property integer $id
 * @property string $invoice_no
 * @property string $invoice_date
 * @property string $eta
 * @property string $etd
 * @property integer $debtor
 * @property string $purpose_of_visit
 * @property string $voyage
 * @property string $vessel
 * @property string $port
 * @property string $cargo
 * @property string $job_ref
 * @property string $GRT
 * @property string $LOA
 * @property string $remarks
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 *
 * @property LogisticDebtor $debtor0
 * @property LogisticsService[] $logisticsServices
 */
class Logistics extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'logistics';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['invoice_date', 'eta', 'etd', 'DOC', 'DOU', 'reports'], 'safe'],
            [['invoice_date', 'invoice_no', 'debtor', 'category'], 'required'],
            [['debtor', 'status', 'CB', 'UB', 'currency'], 'integer'],
            [['purpose_of_visit', 'remarks'], 'string'],
            [['invoice_no', 'voyage', 'vessel', 'port', 'cargo', 'job_ref', 'GRT', 'LOA'], 'string', 'max' => 100],
            [['debtor'], 'exist', 'skipOnError' => true, 'targetClass' => LogisticDebtor::className(), 'targetAttribute' => ['debtor' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'invoice_no' => 'Invoice No',
            'invoice_date' => 'Invoice Date',
            'eta' => 'ETA',
            'etd' => 'ETD',
            'debtor' => 'Debtor',
            'category' => 'Category',
            'purpose_of_visit' => 'Purpose Of Visit',
            'voyage' => 'Voyage',
            'vessel' => 'Vessel',
            'port' => 'Port',
            'cargo' => 'Cargo',
            'job_ref' => 'Job Ref',
            'GRT' => 'GRT',
            'LOA' => 'LOA',
            'remarks' => 'Remarks',
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
    public function getDebtor0() {
        return $this->hasOne(LogisticDebtor::className(), ['id' => 'debtor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogisticsServices() {
        return $this->hasMany(LogisticsService::className(), ['logistics_id' => 'id']);
    }

}
