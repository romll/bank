<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdjustmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Коригування';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adjustment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати коригування', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sum_id',
            'date_transfer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
