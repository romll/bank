<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AktSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оплата по актам ПКЕЕн';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати оплату', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_transfer',
            'sum',
            'handbk_bank_id',
            'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
