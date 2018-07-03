<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LogisticDebtor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistic-debtor-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'trn_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4 pad-left-15">
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pad-left-15">
            <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="form-group" style="float: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
