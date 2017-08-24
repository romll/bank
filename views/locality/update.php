<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Locality */

$this->title = 'Редагувати довідник видів населених пунктів: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Довідник видів населених пунктів', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редагувати';
?>
<div class="locality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash(
        'saccess'
    )) :?>

        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?= Yii::$app->session->getFlash('saccess'); ?>
        </div>

    <?php endif;  ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
