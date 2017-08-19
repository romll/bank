<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Akt */

$this->title = 'Додати оплату';
$this->params['breadcrumbs'][] = ['label' => 'Akts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
