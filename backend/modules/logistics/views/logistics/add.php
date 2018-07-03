<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Service;
use common\models\TaxMaster;

/* @var $this yii\web\View */
/* @var $model common\models\EstimatedProforma */

$this->title = 'Logistics Services';
$this->params['breadcrumbs'][] = ['label' => ' Invoice', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .appoint{
        width: 100%;
    }
    .appoint .value{
        font-weight: bold;
        text-align: left;
    }
    .appoint .labell{
        text-align: left;
    }
    .appoint .colen{

    }
    .appoint td{
        padding: 10px;
    }
    .top-content{
        margin-bottom: 25px;
        border: 1px solid #ccc7c7;
        padding: 5px 0px;
    }
    #log-service-form .form-group{
        margin-bottom: 0px;
    }
</style>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2  class="appoint-title panel-title"><?= Html::encode($this->title) . ' # <b style="color: #008cbd;">' . $logistics->invoice_no . '</b>' ?></h2>

            </div>
            <?php //Pjax::begin();          ?>
            <div class="panel-body">
                <div class="top-content">
                    <table class="appoint">
                        <tr>
                            <td class="labell">Invoice Number </td><td class="colen">:</td><td class="value"><?= $logistics->invoice_no; ?> </td>
                            <td class="labell">Invoice Date</td><td class="colen">:</td><td class="value"><?= $logistics->invoice_date; ?> </td>
                            <td class="labell">Debtor </td><td class="colen">:</td><td class="value"><?= $logistics->debtor; ?></td>
                        </tr>
                        <tr>
                            <td class="labell">ETA </td><td class="colen">:</td><td class="value"><?= $logistics->eta; ?> </td>
                            <td class="labell">ETD</td><td class="colen">:</td><td class="value"><?= $logistics->etd; ?> </td>
                            <td class="labell">Purpose of Visit </td><td class="colen">:</td><td class="value"><?= $logistics->purpose_of_visit; ?></td>
                        </tr>
                        <tr>
                            <td class="labell">Voyage </td><td class="colen">:</td><td class="value"><?= $logistics->voyage; ?> </td>
                            <td class="labell">Vessel</td><td class="colen">:</td><td class="value"><?= $logistics->vessel; ?> </td>
                            <td class="labell">Port</td><td class="colen">:</td><td class="value"><?= $logistics->port; ?></td>
                        </tr>
                    </table>
                </div>
                <?= Html::a('<i class="fa-th-list"></i><span> Manage Logistics</span>', ['logistics/index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                <?= Html::a('<i class="fa-th-list"></i><span> Create Logistics</span>', ['logistics/create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                <?= Html::a('<i class="fa-th-list"></i><span> Generate Invoice</span>', ['logistics/reports', 'id' => $id], ['class' => 'btn btn-secondary btn-icon btn-icon-standalone', 'target' => '_blank']) ?>
                <ul class="estimat nav nav-tabs nav-tabs-justified">
                    <li>
                        <?php
                        echo Html::a('<span class="visible-xs"><i class="fa-home"></i></span><span class="hidden-xs">Logistics</span>', ['logistics/update', 'id' => $id]);
                        ?>

                    </li>
                    <li class="active">
                        <?php
                        echo Html::a('<span class="visible-xs"><i class="fa-home"></i></span><span class="hidden-xs">Services</span>', ['logistics/add', 'id' => $id]);
                        ?>

                    </li>
                </ul>
                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">

                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Taxable Value</th>
                                <th>VAT</th>
                                <th>Total</th>
                                <th data-priority="1">ACTIONS</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            $i = 0;
                            $totalamount = 0;
                            $flag = 0;
                            if (!empty($services)) {
                                foreach ($services as $service_datas) {
                                    if (!empty($service_datas)) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $service_datas->service; ?></td>
                                            <td><?= $service_datas->unit_price; ?></td>
                                            <td><?= $service_datas->qty; ?></td>
                                            <td><?= $service_datas->taxable_value; ?></td>
                                            <td><?= $service_datas->vat; ?></td>
                                            <td><?= $service_datas->total; ?></td>
                                            <td>
                                                <?= Html::a('<i class="fa fa-pencil"></i>', ['/invoice/generate-invoice/add', 'id' => $id, 'invoice_details_id' => $invoice_detail->id], ['class' => '']) ?>
                                                <?= Html::a('<i class="fa-remove"></i>', ['/invoice/generate-invoice/delete-invoice', 'id' => $invoice_detail->id], ['class' => '', 'data-confirm' => 'Are you sure you want to delete this item?']) ?>
                                            </td>

                                            <?php
                                            $totalamount += $service_datas->total;
                                            ?>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
                            ?>

                            <tr>
                                <td colspan="6">Total</td>
                                <td><?= $totalamount ?></td>
                                <td></td>
                            </tr>
                        </tbody>

                    </table>
                </div>

                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">

                    <table cellspacing="0" class="table table-small-font table-bordered table-striped" id="log-service-form">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Taxable Value</th>
                                <th>VAT</th>
                                <th>Total</th>
                                <th data-priority="1">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="filter">
                                <?php $form = ActiveForm::begin(); ?>
                                <td></td>
                                <td style="width:20%;">
                                    <?= $form->field($model, 'service')->dropDownList(ArrayHelper::map(Service::findAll(['status' => 1]), 'id', 'service_name'), ['prompt' => '-services-'])->label(FALSE) ?>
                                </td>
                                <td><?= $form->field($model, 'unit_price')->textInput(['placeholder' => 'Unit Price'])->label(false) ?></td>
                                <td><?= $form->field($model, 'qty')->textInput(['placeholder' => 'Quantity'])->label(false) ?></td>
                                <td><?= $form->field($model, 'taxable_value')->textInput(['placeholder' => 'Taxable Value','readonly'=>TRUE])->label(false) ?></td>
                                <td style="width:15%;">
                                    <?php
                                    $vat_datas = ArrayHelper::map(TaxMaster::find()->where(['status'=>1])->all(), 'id', function($model) {
                                                return $model['name'] . ' - ' . $model['value'] .' %';
                                            }
                                    );
                                    ?>
                                    <?= $form->field($model, 'vat_id')->dropDownList($vat_datas, ['prompt' => '-Choose VAT-'])->label(FALSE) ?>
                                </td>
                                <td><?= $form->field($model, 'total')->textInput(['placeholder' => 'Total','readonly'=>TRUE])->label(false) ?></td>
                                <td><?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => 'btn btn-success']) ?>
                                </td>
                                <?php ActiveForm::end(); ?>


                        </tbody>
                    </table>
                    <div>
                        <?php
                        // echo Html::a('<span>Back to Close Estimate</span>', ['/appointment/close-estimate/add', 'id' => $appointment->id], ['class' => 'btn btn-secondary']);
                        ?>
                    </div>
                </div>





                <link rel="stylesheet" href="<?= Yii::$app->homeUrl; ?>js/select2/select2.css">
                <link rel="stylesheet" href="<?= Yii::$app->homeUrl; ?>js/select2/select2-bootstrap.css">
                <script src="<?= Yii::$app->homeUrl; ?>js/select2/select2.min.js"></script>

                <script>
                    $(document).ready(function () {
                        $("#invoicegeneratedetails-unit_price").keyup(function () {
                            multiply();
                        });
                        $("#invoicegeneratedetails-qty").keyup(function () {
                            multiply();
                        });
                    });
                    function multiply() {
                        var rate = $("#invoicegeneratedetails-unit_price").val();
                        var unit = $("#invoicegeneratedetails-qty").val();
                        if (rate != '' && unit != '') {
                            $("#invoicegeneratedetails-total").val(rate * unit);
                        }

                    }
                    $("#invoicegeneratedetails-total").prop("disabled", true);
                </script>
            </div>
            <?php //Pjax::end();              ?>
        </div>
    </div>
</div>
<!--<a href="javascript:;" onclick="showAjaxModal();" class="btn btn-primary btn-single btn-sm">Show Me</a>
 Modal code
<script type="text/javascript">
        function showAjaxModal(id)
        {
            jQuery('#add-sub').modal('show', {backdrop: 'static'});
            jQuery('#add-sub .modal-body').html(id);
            /*setTimeout(function ()
             {
             jQuery.ajax({
             url: "data/ajax-content.txt",
             success: function (response)
             {
             jQuery('#modal-7 .modal-body').html(response);
             }
             });
             }, 800); // just an example
             */
        }
</script>-->
<div class="modal fade" id="add-sub">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Dynamic Content</h4>
            </div>

            <div class="modal-body">

                Content is loading...

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div>
        </div>
    </div>
    <style>
        .filter{
            background-color: #b9c7a7;
        }
    </style>
</div>
