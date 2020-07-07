<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Building */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'bud_type')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'f_year')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'd_type')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'hname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rank_cup')->textInput() ?>

    <?= $form->field($model, 'rank_sso')->textInput() ?>

    <?= $form->field($model, 'rank_hos')->textInput() ?>

    <?= $form->field($model, 'rank_CR')->textInput() ?>

    <?= $form->field($model, 'b_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_binding1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_binding2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_binding3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_locate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amphur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tumbon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_lev')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_build')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'l_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opd_visit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active_bed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SUM_AdjRw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PCC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Famine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'new_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personels')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'd_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
