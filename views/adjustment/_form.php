<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Adjustment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adjustment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sum_id')->textInput() ?>

    <?= $form->field($model, 'date_transfer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Записати' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
