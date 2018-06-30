<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">FIRST LINE ASHORE  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->first_line_ashore != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->first_line_ashore) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">ALL FAST  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->all_fast != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->all_fast) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">CARGO COMMENCED  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->cargo_commenced != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->cargo_commenced) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">CARGO COMPLETED  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->cargo_completed != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->cargo_completed) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">POB OUTBOUND  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->pob_outbound != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->pob_outbound) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>
    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">CAST OFF  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->cast_off != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->cast_off) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>
    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">LASTLINE AWAY  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->lastline_away != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->lastline_away) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">CLEARED CHANNEL  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->cleared_channel != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->cleared_channel) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">COSP  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->cosp != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->cosp) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">FASOP  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->fasop != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->fasop) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>

    <div class="help-block"></div>
</div>
<div class="form-group field-portcalldata-eosp">
    <label class="control-label" for="portcalldata-eosp">ETA NEXT PORT  :</label>
    <?php
    if (!empty($ports)) {
        if ($ports->eta_next_port != '') {
            ?>
            <?= Yii::$app->SetValues->ChangeFormate($ports->eta_next_port) ?>
            <?php
        }
    }
    ?>
    <?= isset($newDate) ? $newDate : ''; ?>
    <div class="help-block"></div>
</div>
