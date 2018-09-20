<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'service_name')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?php $categories = ArrayHelper::map(common\models\LogisticsCategory::find()->all(), 'id', 'category'); ?>
            <?= $form->field($model, 'category')->dropDownList($categories, ['prompt' => '-Choose a Category-']) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'usd_amount')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>
        </div>
        <?php
        $taxes = ArrayHelper::map(\common\models\TaxMaster::find()->where(['status' => 1])->all(), 'id', function($data) {
                    return $data->name . ' - ' . $data['value'] . '%';
                }
        );
        ?>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'vat')->dropDownList($taxes, ['prompt' => '-Choose a Tax-']) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pad-left-15">
            <?= $form->field($model, 'set_as_default')->checkbox(); ?>
        </div>
    </div>

    <div class="form-group" style="float: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
