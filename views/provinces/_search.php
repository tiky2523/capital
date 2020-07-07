<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProvincesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provinces-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PROVINCE_ID') ?>

    <?= $form->field($model, 'PROVINCE_CODE') ?>

    <?= $form->field($model, 'PROVINCE_NAME') ?>

    <?= $form->field($model, 'GEO_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
