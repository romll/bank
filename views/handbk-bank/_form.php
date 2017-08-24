<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HandbkBank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="handbk-bank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_bank')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Записати' : 'Редагувати', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
