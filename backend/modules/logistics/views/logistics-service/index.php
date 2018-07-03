<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LogisticsServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logistics Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logistics-service-index">

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
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        
                                        <?=  Html::a('<i class="fa-th-list"></i><span> Create Logistics Service</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                                                                                                                                        <?= GridView::widget([
                                                'dataProvider' => $dataProvider,
                                                'filterModel' => $searchModel,
        'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

                                                            'id',
            'logistics_id',
            'service',
            'unit_price',
            'qty',
            // 'taxable_value',
            // 'vat_id',
            // 'vat_amount',
            // 'vat_percentage',
            // 'total',
            // 'status',
            // 'CB',
            // 'UB',
            // 'DOC',

                                                ['class' => 'yii\grid\ActionColumn'],
                                                ],
                                                ]); ?>
                                                                                                                </div>
                        </div>
                </div>
        </div>
</div>


