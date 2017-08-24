<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdditionalHandbkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Довідник ознак надходження коштів';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additional-handbk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати ознаку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_document',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
