<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Statement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_pay')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handbk_bank_id')->textInput() ?>

    <?= $form->field($model, 'locality_id')->textInput() ?>

    <?= $form->field($model, 'checked')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Записати' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
