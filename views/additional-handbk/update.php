<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdditionalHandbk */

$this->title = 'Update Additional Handbk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Additional Handbks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="additional-handbk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
