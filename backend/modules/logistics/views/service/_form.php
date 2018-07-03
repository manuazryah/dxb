<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
            <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>
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
