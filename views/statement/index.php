<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Виписка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statement-index">



    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Додати виписку', ['value' => Url::to(['statement/create']), 'title' => $this->title, 'class' => 'showModalButton btn btn-success']); ?>


    </p>
    <?php Pjax::begin([
        'id' => 'bank'
    ]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            //'date_pay',
            [
                'attribute' => 'date_pay',
                'format' => ['date', 'php:d.m.Y'],
            ],
            'sum',
            //'handbk_bank_id',
            [
                'attribute' => 'handbk_bank_id',
                'value' => 'handbkBank.name_bank',
            ],
            //'locality_id',
            [
                'attribute' => 'locality_id',
                'value' => 'locality.name_localiti',

            ],
            // 'checked',
            // 'note:ntext',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end() ?>

</div>
