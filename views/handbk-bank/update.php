<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HandbkBank */

$this->title = 'Редагувати довідник банків: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Handbk Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="handbk-bank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
