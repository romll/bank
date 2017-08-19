<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatementSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statement-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_pay') ?>

    <?= $form->field($model, 'sum') ?>

    <?= $form->field($model, 'handbk_bank_id') ?>

    <?= $form->field($model, 'locality_id') ?>

    <?php // echo $form->field($model, 'checked') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'state') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
