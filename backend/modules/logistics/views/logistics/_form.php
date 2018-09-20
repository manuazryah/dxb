<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\LogisticDebtor;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Logistics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistics-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'invoice_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?php
            if ($model->invoice_date != '') {
                $model->invoice_date = date('Y-m-d');
            }
            ?>
            <?=
            $form->field($model, 'invoice_date')->widget(\yii\jui\DatePicker::classname(), [
                'dateFormat' => 'yyyy-MM-dd',
                'options' => ['class' => 'form-control']
            ])
            ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'debtor')->dropDownList(ArrayHelper::map(LogisticDebtor::findAll(['status' => 1]), 'id', 'name'), ['prompt' => '-Choose Debtor-']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 pad-left-15">
            <?php $categories = ArrayHelper::map(common\models\LogisticsCategory::find()->all(), 'id', 'category'); ?>
            <?= $form->field($model, 'category')->dropDownList($categories, ['prompt' => '-Choose a Category-']) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'purpose_of_visit')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'voyage')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'vessel')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'port')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'cargo')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'job_ref')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'GRT')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'LOA')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'remarks')->textInput() ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'currency')->dropDownList(ArrayHelper::map(common\models\Currency::findAll(['status' => 1]), 'id', 'currency_name'), ['class' => 'form-control']) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>
    </div>

    <div class="form-group" style="float: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
