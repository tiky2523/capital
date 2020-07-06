<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_hos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amphur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tumbon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
