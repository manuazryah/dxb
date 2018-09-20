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
                <?= Html::a('<i class="fa-th-list"></i><span> Invoice With Header</span>', ['logistics/reports', 'id' => $id], ['class' => 'btn btn-secondary btn-icon btn-icon-standalone', 'target' => '_blank']) ?>
                <?= Html::a('<i class="fa-th-list"></i><span> Invoice Without Header</span>', ['logistics/report', 'id' => $id], ['class' => 'btn btn-secondary btn-icon btn-icon-standalone', 'target' => '_blank']) ?>
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
                <div class="saved-report">
                    <h5 style="text-decoration: underline;text-decoration: underline;color: #2e5da7;font-size: 16px;font-weight: 600;">Saved Logistics Report</h5>
                    <ul class="report-list">
                        <?php
                        if (!empty($model)) {
                            $saved_reports = \common\models\LogisticReports::find()->where(['logistics_id' => $model->id])->all();
                            if (!empty($saved_reports)) {
                                $n = 0;
                                foreach ($saved_reports as $saved_report) {
                                    if (!empty($saved_report)) {
                                        $n++;
                                        ?>

                                        <li><a class="name" href="<?= Yii::$app->homeUrl ?>logistics/logistics/show-report?id=<?= $saved_report->id ?>" target="_blank','width=750, height=500');return false;"><?= $model->invoice_no ?>-<?= $n ?></a><a class="close" href="<?= Yii::$app->homeUrl ?>logistics/logistics/remove-report?id=<?= $saved_report->id ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-close"></i></a></li>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
