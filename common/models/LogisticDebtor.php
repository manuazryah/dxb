<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logistic_debtor".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $trn_no
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 *
 * @property Logistics[] $logistics
 */
class LogisticDebtor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logistic_debtor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['trn_no', 'address', 'name'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['name'], 'string', 'max' => 200],
            [['trn_no'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'trn_no' => 'TRN No',
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
        return $this->hasMany(Logistics::className(), ['debtor' => 'id']);
    }
}
