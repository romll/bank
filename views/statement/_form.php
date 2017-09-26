<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Statement */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$this->registerJsFile('@web/js/ReloadGridView.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerJsFile('@web/js/nextInp.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div class="statement-form">

<?php Pjax::begin([
    'id' => 'bank-form',
    'enablePushState' => false,
]) ?>

    <?php if (Yii::$app->session->hasFlash(
        'saccess'
    )) :?>

        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?= Yii::$app->session->getFlash('saccess'); ?>
        </div>

    <?php endif;  ?>

    <?php $form = ActiveForm::begin([
        'options' => [
            'data-pjax' => true
        ],
        'id' => 'create-bank',
    ]); ?>

    <?php $model->date_pay = date('Y-m-d', strtotime('-1 day')); ?>

    <?= $form->field($model, 'date_pay')->widget(DatePicker::classname(), [
        'name' => 'statement-date-pay',
        'value' => date('Y-m-d', strtotime('-1 day')),
        //'convertFormat' => 'Y-m-d',
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        //'options' => ['placeholder' => 'Select issue date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
            'daysOfWeekDisabled' => [0,6],
            'daysOfWeekHighlighted'=> [0,6]
        ]
    ]) ?>

    <?= $form->field($model, 'sum')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

    <?php //$paramsBank = ['prompt' => 'Виберіть банк...'] ?>

    <?= $form->field($model, 'handbk_bank_id')->widget(Select2::className(), [
        'name' => 'name-bank',
        'data' => $model->getBankName(),
        'options' => [
            'placeholder' => 'Виберіть банк...',
        ],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ])

    /*dropDownList($model->getBankName(), $paramsBank)*/ ?>

    <?php $paramsLocaliti = ['prompt' => 'Вкажіть тип населенного пункту...'] ?>

    <?= $form->field($model, 'locality_id')->dropDownList($model->getLocalitiName(), $paramsLocaliti) ?>

    <?//= $form->field($model, 'checked')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'state')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Записати' : 'Редагувати', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php Pjax::end() ?>
</div>
