<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'code5') ?>

    <?= $form->field($model, 'code9') ?>

    <?= $form->field($model, 'hospital') ?>

    <?= $form->field($model, 'type_hos') ?>

    <?= $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'amphur') ?>

    <?php // echo $form->field($model, 'tumbon') ?>

    <?php // echo $form->field($model, 'moo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
