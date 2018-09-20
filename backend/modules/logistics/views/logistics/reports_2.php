<div id="print">
    <style type="text/css">

        thead { display: table-header-group;   }
        tfoot{display: table-footer-group;}
        table { page-break-inside:auto;}
        tr{ page-break-inside:avoid; page-break-after:auto; }

        @page {
            size: A4;
        }
        @media print {
            .main-tabl{
                -webkit-print-color-adjust: exact;
            }

        }
        #print{
            font-family: sans-serif;
        }
        .main-tabl{
            width:100%;
        }
        .main-left{
            float: left;
            margin-left: 15px;
        }
        .main-right{
            float: right;
        }
        .heading{
            text-align: center;
            padding: 13px 0px;
            font-size: 20px;
            font-weight: 600;
        }
        .header-box{
            width: 100%;
            /*border: 1px solid #aba5a5;*/
            margin-bottom: 30px;
        }
        .box-left{
            float: left;
            width: 65%;
            /*border-right: 1px solid #aba5a5;*/
            display: inline-flex;
        }
        .box-right{
            float: left;
            width: 35%;
            text-align: center;
        }
        .address-box{
            padding: 0px 10px;
        }
        .address-box p{
            font-size:7px;
            line-height: .8;
        }
        .address-box strong{
            font-size:7px;
            font-weight: 600;
        }
        .box-1{
            width: 100%;
            display: inline-flex;
            border: 1px solid #aba5a5;
            border-bottom: none;
        }
        .box-2{
            border-top: none;
            border-left: none;
        }
        .box-1:last-child{
            border-bottom: 0px;
        }
        .box-right-label{
            background: #ffffff;
            color: #484646;
            padding: 5px 11px;
            font-size:7px;
            text-align: left;
        }
        .box-right-content{
            padding: 5px 0px;
            font-size:7px;
        }
        .box-left-1{
            width: 50%;
            float: left;
            text-align: center;
            border-right: 1px solid #aba5a5;
        }
        .box-left-2{
            width: 50%;
            float: left;
            text-align: center;
        }
        .description-tbl{
            width: 100%;
        }
        .description-tbl{
            background: #484646;
            text-align: left;
        }
        .description-tbl th{
            font-size:7px;
            color: white;
        }
        .description-tb2{
            width: 100%;
            text-align: left;
            font-size:7px;
        }
        .description-tb3{
            width: 100%;
            text-align: left;
            border-top: 1px solid #aba5a5;
            padding: 7px 0px;
            font-size:7px;
        }
        .description-tb3 td{
            line-height: 15px;
        }
        .heading-bank{
            background: #484646;
            padding: 5px 0px;
            color: white;
            text-align: center;
            margin: 20px 0px;
            font-size:7px;
        }
        .bank-content{
            text-align: center;
        }
        .bank-content p{
            font-size:7px;
        }
        .note{
            text-align: center;
            margin: 20px 0px;
        }
        .note p{
            font-size:7px;
        }
        .note p>strong{
            font-size:7px;
        }
        .footer-text{
            text-align: center;
            border-top: 1px solid #b7b5b5;
        }
        .footer-text p{
            font-size:7px;
            line-height: 2px;
        }
        .address-box-to {
            padding: 0px 10px;
            width: 50%;
        }
        .address-box-to strong {
            font-size:7px;
            font-weight: 600;
        }
        .address-box-to p {
            font-size:7px;
            font-weight: 400;
            text-transform: uppercase;
            line-height: 1.8;
        }
        .terms-condition{
            padding: 0px 10px;
        }
        .terms-condition h5{
            margin-bottom: 0px;
            font-size:7px;
        }
        .terms-condition ol{
            padding-left: 15px;
            margin-top: 15px;
            margin-bottom: 0px;
        }
        .terms-condition ol>li{
            font-size:7px;
        }
        .box-right-table{
            /*border: 1px solid black;*/
            border-collapse: collapse;
        }
        .box-right-label{
            border: 1px solid #aba5a5;
            border-collapse: collapse;
            padding: 5px;
            text-align: left;
        }
        .box-right-content{
            border: 1px solid #aba5a5;
            border-collapse: collapse;
            padding: 5px;
            text-align: left; 
            border-right: none;
        }
        .box-right-table1 tr:first-child th, .box-right-table1 tr:first-child td{
            border-top: 0px;
        }
        .box-right-table1 tr:last-child th, .box-right-table1 tr:last-child td{
            border-bottom: 0px;
        }
    </style>
    <table border ="0"  class="main-tabl" border="0">
        <thead>
            <tr>
                <th style="width:100%">
                    <div class="header">
                        <div class="main-left">
                            <?php
                            $img = '<img width="90px" height="75px" src="' . Yii::$app->homeUrl . 'images/logoleft.jpg"/>';
                            echo $img;
                            ?>
                        </div>
                        <div class="main-right">
                            <?php
                            $img = '<img width="90px" height="75px" src="' . Yii::$app->homeUrl . 'images/logoright.jpg"/>';
                            echo $img;
                            ?>
                        </div>
                        <br/>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="heading">TAX INVOICE</div>
                </td>
            </tr>
            <tr>
                <td style="width:100%;">
                    <div class="header-box">
                        <div class="box-1">
                            <div class="box-left">
                                <div class="address-box" style="width:50%;">
                                    <p> <strong>From,</strong><p>
                                        <strong>Emperor&nbsp;SHIPPING LINES LLC</strong>
                                    <p>#215, AL AHBABI BLD 2, 2ND FLOOR</p>
                                    <p>NEAR DUBAI GRAND HOTEL, AL QUASIS</p>
                                    <p>P.O.BOX - 233797,&nbsp;DUBAI, UAE</p>
                                    <p><strong>TRN : 100315372100003</strong></p>
                                </div>
                                <div class="address-box-to" style="width:50%;">
                                    <p style="line-height: 8px;"> <strong>To,</strong><p>
                                        <?php
                                        if (!empty($logistics)) {
                                            if ($logistics->debtor != '') {
                                                ?>
                                            <p style="line-height: 5px;"><strong><?= \common\models\LogisticDebtor::findOne($logistics->debtor)->name; ?></strong></p>
                                            <p><?= \common\models\LogisticDebtor::findOne($logistics->debtor)->address; ?></p>
                                            <p><strong>TRN : <?= \common\models\LogisticDebtor::findOne($logistics->debtor)->trn_no; ?></strong></p>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="box-right">
                                <table class="box-right-table box-right-table1" style="width: 100%;">
                                    <tr class="border_bottom">
                                        <th class="box-right-label">INVOICE NO</th>
                                        <td class="box-right-content"><?= $logistics->invoice_no != '' ? $logistics->invoice_no : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">DATE</th>
                                        <td class="box-right-content"><?= $logistics->invoice_date != '' ? $logistics->invoice_date : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">PURPOSE OF VISIT</th>
                                        <td class="box-right-content"><?= $logistics->purpose_of_visit != '' ? $logistics->purpose_of_visit : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">VOYAGE</th>
                                        <td class="box-right-content"><?= $logistics->voyage != '' ? $logistics->voyage : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">VESSEL</th>
                                        <td class="box-right-content"><?= $logistics->vessel != '' ? $logistics->vessel : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">PORT</th>
                                        <td class="box-right-content"><?= $logistics->port != '' ? $logistics->port : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">CRT</th>
                                        <td class="box-right-content"><?= $logistics->GRT != '' ? $logistics->GRT : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">LOA</th>
                                        <td class="box-right-content"><?= $logistics->LOA != '' ? $logistics->LOA : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">CARGO</th>
                                        <td class="box-right-content"><?= $logistics->cargo != '' ? $logistics->cargo : 'N/A' ?></td>
                                    </tr>
                                    <tr>
                                        <th class="box-right-label">JOB REF</th>
                                        <td class="box-right-content"><?= $logistics->job_ref != '' ? $logistics->job_ref : 'N/A' ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-1 box-2">
                            <table class="box-right-table" style="width:100%;">
                                <tr>
                                    <th class="box-right-label">REMARKS : </th>
                                    <td class="box-right-content"><?= $logistics->remarks != '' ? $logistics->remarks : 'N/A' ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="logistic-description">
                        <table class="description-tbl">
                            <thead>
                                <tr>
                                    <th style="width:7%;">SL.No</th>
                                    <th style="width:30%;">Description</th>
                                    <th style="width:15%;text-align:right">Unit Price</th>
                                    <th style="width:8%;text-align:right;">Qty</th>
                                    <th style="width:15%;text-align:right;">Taxable Value</th>
                                    <th style="width:10%;text-align:right;">VAT</th>
                                    <th style="width:15%;text-align:right;">Total in AED</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="description-tb2">
                            <?php
                            if (!empty($logistic_services)) {
                                $i = 0;
                                $amount_tot = 0;
                                $tax_tot = 0;
                                foreach ($logistic_services as $logistic_service) {
                                    if (!empty($logistic_service)) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td style="width:7%;"><?= $i ?></td>
                                            <td style="width:30%;"><?= $logistic_service->service0->service_name ?></td>
                                            <td style="width:15%;text-align:right"><?= $logistic_service->unit_price ?></td>
                                            <td style="width:8%;text-align:right"><?= $logistic_service->qty ?></td>
                                            <td style="width:15%;text-align:right"><?= $logistic_service->taxable_value ?></td>
                                            <td style="width:10%;text-align:right"><?= $logistic_service->vat_amount ?></td>
                                            <td style="width:15%;text-align:right"><?= $logistic_service->total ?></td>
                                        </tr>
                                        <?php
                                        $amount_tot += $logistic_service->taxable_value;
                                        $tax_tot += $logistic_service->vat_amount;
                                    }
                                }
                                $grand_tot = $amount_tot + $tax_tot;
                                if ($grand_tot > 0 && $tax_tot > 0) {
                                    $percentage = ( $tax_tot / $grand_tot ) * 100;
                                } else {
                                    $percentage = 0;
                                }
                                ?>
                            <?php }
                            ?>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                        <table class="description-tb3">
                            <tr>
                                <td colspan="4" style="width:60%;text-align:right">TOTAL BEFORE TAX</td>
                                <td style="width:15%;text-align:right"></td>
                                <td style="width:10%;text-align:right"><?= $logistics->currency == 1 ? 'USD' : 'AED' ?></td>
                                <td style="width:15%;text-align:right"><?= sprintf('%0.2f', $amount_tot); ?></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="width:60%;text-align:right">VAT (5%)</td>
                                <td style="width:15%;text-align:right"></td>
                                <td style="width:10%;text-align:right"></td>
                                <td style="width:15%;text-align:right"><?= sprintf('%0.2f', $tax_tot); ?></td>
                            </tr>
                        </table>
                        <table class="description-tbl" style="margin-bottom: 10px;">
                            <thead>
                                <tr>
                                    <td colspan="4"style="width:60%;text-align:right;color: #fff;font-size: 6px;">AMOUNT PAYABLE INCLUSIVE OF TAX</td>
                                    <td style="width:15%;text-align:right;"></td>
                                    <td style="width:10%;text-align:right;color: #fff;font-size: 6px;"><?= $logistics->currency == 1 ? 'USD' : 'AED' ?></td>
                                    <td style="width:15%;text-align:right;color: #fff;font-size: 6px;"><?= sprintf('%0.2f', $grand_tot); ?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="terms-condition">
                        <h5>Terms & Conditions</h5>
                        <ol>
                            <li>Payment should settle within 7 days of invoice date.</li>
                            <li>If you have any questions about this invoice, please contact through acc@emperorline.com</li>
                            <li>Please transfer the funds to our below account</li>
                        </ol>
                    </div>
                    <div class="heading-bank">Bank Account Details</div>
                    <div class="bank-content">
                        <p>Beneficiary: EMPEROR SHIPPING LINES L.L.C, P.O.BOX:233797, AL QUSAIS, DUBAI, U.A.E</p>
                        <p>Bank: RAK BANK (NATIONAL BANK OF RAS AL KHAIMAH) | NK MALL, AJMAN BRANCH, AJMAN, U.A.E</p>
                        <p>Account Details: USD A/C #0019-487184-062 | SWIFT CODE: NRAKAEAK | IBAN NO: AE 72040 00000 19487 184062</p>
                        <p>Account Details: USD A/C #0019-487184-061 | SWIFT CODE: NRAKAEAK | IBAN NO: AE 72040 00000 19487 184061</p>
                    </div>
                    <div class="note">
                        <p>Thank you for your business!</p>
                        <p><strong>This is computer generated invoice, no signature required</strong></p>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td style="width:100%">
                    <div class="footer-text">
                        <p>Head Office : Dubai - U.A.E., P.O.Box : 233797, Tel.:+971 4239 2266, Fax : + 971 4239 2244, E-mail : emperor@emperorlines.com</p>
                        <p>Branch : Fujairah - U.A.E., P.O.Box : 9544, Tel.:+971 9223 4567, Fax : + 971 9223 4566, E-mail : empfuj@emperor.ae</p>
                        <p>Branch : Sharjah / Khorfakkan,Suite No.:#222,Floor02,Warmseas Bldg, Tel: +971 223 4567 , Mob: +971 55 300 1545, E-mail : kfk@emperor.ae</p>
                        <p>Branch : Ras Al Khaimah, Tel: +971 7268, Mob.: +971 55 300 1535, E-mail : operak@emperor.ae</p>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
<div style="display:inline-block">
    <div class="print" style="float:left;">
        <?php
        if ($print) {
            ?>
            <button onclick="printContent('print')" style="font-weight: bold !important;">Print</button>
            <?php
        }
        ?>
        <button onclick="window.close();" style="font-weight: bold !important;">Close</button>
        <?php
        if ($save) {
            ?>
            <a href="<?= Yii::$app->homeUrl ?>logistics/logistics/save-report?id=<?= $logistics->id ?>"><button onclick="" style="font-weight: bold !important;">Save</button></a>
            <?php
        }
        ?>
    </div>
    <?php ?>
</div>