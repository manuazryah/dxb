<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LogisticsService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistics-service-form form-inline">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'logistics_id')->textInput() ?>

    <?= $form->field($model, 'service')->textInput() ?>

    <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'taxable_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vat_id')->textInput() ?>

    <?= $form->field($model, 'vat_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vat_percentage')->textInput() ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'CB')->textInput() ?>

    <?= $form->field($model, 'UB')->textInput() ?>

    <?= $form->field($model, 'DOC')->textInput() ?>

    <div class="form-group" style="float: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
