<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdditionalHandbk */

$this->title = 'Додати ознаку надходження коштів';
$this->params['breadcrumbs'][] = ['label' => 'Additional Handbks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additional-handbk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
