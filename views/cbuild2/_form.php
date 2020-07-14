<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cbuild2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cbuild2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
