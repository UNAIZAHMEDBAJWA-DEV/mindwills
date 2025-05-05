<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="customer-index">

    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 20px;">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= Html::a('Create Customer', ['customer/create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'email',
            'phone',
            [
                'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>

</div>
