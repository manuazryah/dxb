<?php

namespace backend\modules\logistics\controllers;

use Yii;
use common\models\Logistics;
use common\models\LogisticsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LogisticsController implements the CRUD actions for Logistics model.
 */
class LogisticsController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Logistics models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new LogisticsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Logistics model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Logistics model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Logistics();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            return $this->redirect(['/logistics/logistics/add', 'id' => $model->id]);
        } return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /*
     * Add Logistics Services
     */

    public function actionAdd($id, $service_id = NULL) {
        if (!isset($service_id)) {
            $model = new \common\models\LogisticsService();
        } else {
            $model = \common\models\LogisticsService::find()->where(['id' => $service_id])->one();
        }
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->taxable_value = $model->qty * $model->unit_price;
            $model->vat_amount = 0;
            $model->vat_percentage = 0;
            if (isset($model->vat_id) && $model->vat_id != '') {
                $vat_data = \common\models\TaxMaster::find()->where(['id' => $model->vat_id])->one();
                if (!empty($vat_data)) {
                    if ($vat_data->value != '' && $vat_data->value > 0 && $model->taxable_value > 0) {
                        $model->vat_percentage = $vat_data->value;
                        $tax_amount = (($model->taxable_value * $model->vat_percentage) / 100);
                        $grand_total = ($model->taxable_value + $tax_amount);
                        $model->total = $grand_total;
                        $model->vat_amount = $tax_amount;
                    } else {
                        $model->total = $model->taxable_value;
                    }
                }
            }
            $model->logistics_id = $id;
            if ($model->save()) {
                return $this->redirect(['add', 'id' => $id]);
            }
        }
        $services = \common\models\LogisticsService::findAll(['logistics_id' => $id]);
        $logistics = Logistics::findOne(['id' => $id]);
        return $this->render('add', [
                    'model' => $model,
                    'services' => $services,
                    'id' => $id,
                    'logistics' => $logistics,
        ]);
    }

    /**
     * Updates an existing Logistics model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->id]);
        } return $this->render('update', [
                    'model' => $model,
                    'id' => $id,
        ]);
    }

    /**
     * Deletes an existing Logistics model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDeleteService($id) {
        $model = \common\models\LogisticsService::find()->where(['id' => $id])->one();
        if (!empty($model)) {
            $model->delete();
        }
        return $this->redirect(['add', 'id' => $id]);
    }

    /**
     * Finds the Logistics model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Logistics the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Logistics::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /*
     * Get Unit price from servive
     * return unit price
     */

    public function actionGetService() {
        if (Yii::$app->request->isAjax) {
            $service_id = $_POST['service'];
            $res = '';
            $service_data = \common\models\Service::find()->where(['id' => $service_id])->one();
            if (!empty($service_data)) {
                $res = $service_data->unit_price != '' ? $service_data->unit_price : '';
            }
            return $res;
        }
    }

    /*
     * Get Vat value From Tax Master Table
     * return unit price
     */

    public function actionGetTax() {
        if (Yii::$app->request->isAjax) {
            $vat_id = $_POST['vat_id'];
            $res = '';
            $tax_data = \common\models\TaxMaster::find()->where(['id' => $vat_id])->one();
            if (!empty($tax_data)) {
                $res = $tax_data->value != '' ? $tax_data->value : '';
            }
            return $res;
        }
    }

}
