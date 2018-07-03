<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LogisticsServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistics-service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'logistics_id') ?>

    <?= $form->field($model, 'service') ?>

    <?= $form->field($model, 'unit_price') ?>

    <?= $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'taxable_value') ?>

    <?php // echo $form->field($model, 'vat_id') ?>

    <?php // echo $form->field($model, 'vat_amount') ?>

    <?php // echo $form->field($model, 'vat_percentage') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
