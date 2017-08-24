<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Statement */

$this->title = 'Додати виписку';
$this->params['breadcrumbs'][] = ['label' => 'Виписка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
