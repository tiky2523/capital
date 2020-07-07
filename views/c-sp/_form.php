<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CSp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="csp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code_sp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sp_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
