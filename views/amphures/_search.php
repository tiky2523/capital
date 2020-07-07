<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AmphuresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="amphures-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AMPHUR_ID') ?>

    <?= $form->field($model, 'AMPHUR_CODE') ?>

    <?= $form->field($model, 'AMPHUR_NAME') ?>

    <?= $form->field($model, 'POSTCODE') ?>

    <?= $form->field($model, 'GEO_ID') ?>

    <?php // echo $form->field($model, 'PROVINCE_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
