<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdditionalHandbk */

$this->title = 'Додати ознаку надходження коштів';
$this->params['breadcrumbs'][] = ['label' => 'Довідник ознак', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additional-handbk-create">

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
