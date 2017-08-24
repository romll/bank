<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Statement */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Виписка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редагувати', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_pay',
            'sum',
            'handbk_bank_id',
            'locality_id',
            'checked',
            'note:ntext',
            'state',
        ],
    ]) ?>

</div>
