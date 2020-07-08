<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\CHos;


/* @var $this yii\web\View */
/* @var $model app\models\Building */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'bud_type')->dropDownList([
                'งบลงทุน'=>'งบลงทุน',
                'งบค่าเสื่อม'=>'งบค่าเสื่อม',
            ],['prompt'=>'เลือกประเภทงบประมาณ...']) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'f_year')->dropDownList([
                '2564'=>'2564',
                '2565'=>'2565',
                '2566'=>'2566',
                '2567'=>'2567',
                '2568'=>'2568',
                '2569'=>'2569',
                '2570'=>'2570',
                '2571'=>'2571',
                '2572'=>'2572',
                '2573'=>'2573',
                '2574'=>'2574',
                '2575'=>'2575',
            ],['prompt'=>'เลือกปีงบประมาณ...']) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'd_type')->dropDownList([
                '1'=>'รพศ/รพท/รพช',
                '2'=>'รพ.สต./ศสม.',
                '3'=>'สสจ/สสอ.',
            ],['prompt'=>'เลือกประเภทหน่วยงาน...']) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'hname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'rank_cup')->textInput() ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'rank_sso')->textInput() ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'rank_hos')->textInput() ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'rank_CR')->textInput() ?>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <?= $form->field($model, 'b_list')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'b_type')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'p_type')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'p_no')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'u_price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'unit_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'b_binding1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'b_binding2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'b_binding3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 't_budget')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'b_locate')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'amphur')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'tumbon')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'hos_lev')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 't_build')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <?= $form->field($model, 'reason')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'l_time')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'pop')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'opd_visit')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'active_bed')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'SUM_AdjRw')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <?= $form->field($model, 'EC')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <?= $form->field($model, 'ES')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'PCC')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'Famine')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <?= $form->field($model, 'new_b')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'personels')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'd_update')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
