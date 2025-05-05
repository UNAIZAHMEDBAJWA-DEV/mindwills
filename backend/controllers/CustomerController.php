<?php
namespace backend\controllers;

use Yii;
use backend\models\Customer;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;

class CustomerController extends Controller
{
    // Action for listing all customers
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Customer::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    // Action for creating a new customer
    public function actionCreate()
    {
        $model = new Customer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Redirect to index after successful creation
            Yii::$app->session->setFlash('success', 'Customer has been created successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($id)
{
    $model = $this->findModel($id);

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        Yii::$app->session->setFlash('success', 'Customer updated successfully.');
        return $this->redirect(['index']);
    }

    return $this->render('update', [
        'model' => $model,
    ]);
}
protected function findModel($id)
{
    if (($model = \backend\models\Customer::findOne($id)) !== null) {
        return $model;
    }

    throw new \yii\web\NotFoundHttpException('The requested customer does not exist.');
}

public function actionView($id)
{
    return $this->render('view', [
        'model' => $this->findModel($id),
    ]);
}

public function actionDelete($id)
{
    $this->findModel($id)->delete();

    Yii::$app->session->setFlash('success', 'Customer deleted successfully.');
    return $this->redirect(['index']);
}

}
