<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LocalitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Довідник видів населеного пункту';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locality-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_localiti',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
