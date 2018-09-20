<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logistics_category".
 *
 * @property integer $id
 * @property string $category
 */
class LogisticsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logistics_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
        ];
    }
}
