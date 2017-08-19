<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdditionalHandbk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="additional-handbk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_document')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Записати' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
