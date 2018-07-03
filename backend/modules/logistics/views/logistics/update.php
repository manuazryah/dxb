<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Logistics */

$this->title = 'Update Logistics: ' . $model->invoice_no;
$this->params['breadcrumbs'][] = ['label' => 'Logistics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>

            </div>
            <div class="panel-body">
                <?= Html::a('<i class="fa-th-list"></i><span> Manage Logistics</span>', ['logistics/index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                <?= Html::a('<i class="fa-th-list"></i><span> Create Logistics</span>', ['logistics/create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                <?= Html::a('<i class="fa-th-list"></i><span> Generate Invoice</span>', ['logistics/reports', 'id' => $id], ['class' => 'btn btn-secondary btn-icon btn-icon-standalone', 'target' => '_blank']) ?>
                <ul class="estimat nav nav-tabs nav-tabs-justified">
                    <li class="active">
                        <?php
                        echo Html::a('<span class="visible-xs"><i class="fa-home"></i></span><span class="hidden-xs">Generate Invoice</span>', ['logistics/update', 'id' => $model->id]);
                        ?>

                    </li>
                    <li>
                        <?php
                        echo Html::a('<span class="visible-xs"><i class="fa-home"></i></span><span class="hidden-xs">Services</span>', ['logistics/add', 'id' => $model->id]);
                        ?>

                    </li>
                </ul>
                <div class="panel-body"><div class="logistics-create">
                        <?=
                        $this->render('_form', [
                            'model' => $model,
                        ])
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
