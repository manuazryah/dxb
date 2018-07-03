<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LogisticsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logistics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'invoice_no') ?>

    <?= $form->field($model, 'invoice_date') ?>

    <?= $form->field($model, 'eta') ?>

    <?= $form->field($model, 'etd') ?>

    <?php // echo $form->field($model, 'debtor') ?>

    <?php // echo $form->field($model, 'purpose_of_visit') ?>

    <?php // echo $form->field($model, 'voyage') ?>

    <?php // echo $form->field($model, 'vessel') ?>

    <?php // echo $form->field($model, 'port') ?>

    <?php // echo $form->field($model, 'cargo') ?>

    <?php // echo $form->field($model, 'job_ref') ?>

    <?php // echo $form->field($model, 'GRT') ?>

    <?php // echo $form->field($model, 'LOA') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
