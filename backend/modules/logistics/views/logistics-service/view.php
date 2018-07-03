<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LogisticsService */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logistics Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>

                                <div class="panel-options">
                                        <a href="#" data-toggle="panel">
                                                <span class="collapse-icon">&ndash;</span>
                                                <span class="expand-icon">+</span>
                                        </a>
                                        <a href="#" data-toggle="remove">
                                                &times;
                                        </a>
                                </div>
                        </div>
                        <div class="panel-body">
                                <?=  Html::a('<i class="fa-th-list"></i><span> Manage Logistics Service</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                <div class="panel-body"><div class="logistics-service-view">
                                                <p>
                                                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                                        'class' => 'btn btn-danger',
                                                        'data' => [
                                                        'confirm' => 'Are you sure you want to delete this item?',
                                                        'method' => 'post',
                                                        ],
                                                        ]) ?>
                                                </p>

                                                <?= DetailView::widget([
                                                'model' => $model,
                                                'attributes' => [
                                                            'id',
            'logistics_id',
            'service',
            'unit_price',
            'qty',
            'taxable_value',
            'vat_id',
            'vat_amount',
            'vat_percentage',
            'total',
            'status',
            'CB',
            'UB',
            'DOC',
                                                ],
                                                ]) ?>
</div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


