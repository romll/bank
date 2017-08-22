<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Реєстрація';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#">Реєстрація</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Зареєструйтеся для початку роботи</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('Оберіть і\'мя')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)->passwordInput()
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('Пароль')]) ?>

        <div class="row">
            <div class="col-xs-7">
                <?//= $form->field($model, 'rememberMe')->checkbox()?>
            </div>
            <!-- /.col -->
            <div class="col-xs-5">
                <?= Html::submitButton('Реєстрація', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'signup-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->