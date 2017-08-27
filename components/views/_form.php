<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Statement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statement-form">

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <?php $form = ActiveForm::begin(); ?>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?= Html::encode($this->title)  ?></h4>
                </div>
                <div class="modal-body">

                    <?= $form->field($model, 'date_pay')->textInput() ?>

                    <?= $form->field($model, 'sum')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

                    <?= $form->field($model, 'handbk_bank_id')->textInput() ?>

                    <?= $form->field($model, 'locality_id')->textInput() ?>

                    <?= $form->field($model, 'checked')->textInput() ?>

                    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'state')->textInput() ?>

                </div>
                <div class="modal-footer">

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Записати' : 'Редагувати', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

</div>