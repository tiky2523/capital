<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use kartik\depdrop\DepDrop;
use kartik\number\NumberControl;
use yii\jui\DatePicker;
use app\models\CHos;
use app\models\Districts;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building2-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2">
    <?=
            $form->field($model, 'bud_type')->dropDownList([
                'งบลงทุน' => 'งบลงทุน',
                'งบค่าเสื่อม' => 'งบค่าเสื่อม',
                    ], ['prompt' => 'เลือกประเภทงบประมาณ...'])
            ?>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
            <?=
            $form->field($model, 'f_year')->dropDownList([
                '2564' => '2564',
                '2565' => '2565',
                '2566' => '2566',
                '2567' => '2567',
                '2568' => '2568',
                '2569' => '2569',
                '2570' => '2570',
                '2571' => '2571',
                '2572' => '2572',
                '2573' => '2573',
                '2574' => '2574',
                '2575' => '2575',
                    ], ['prompt' => 'เลือกปีงบประมาณ...'])
            ?>
    </div>

     <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'd_type')->dropDownList([
                'รพศ/รพท/รพช' => 'รพศ/รพท/รพช',
                'รพ.สต./ศสม.' => 'รพ.สต./ศสม.',
                'สสจ/สสอ.' => 'สสจ/สสอ.',
                    ], ['prompt' => 'เลือกประเภทหน่วยงาน...'])
            ?>
        </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'hmain')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(app\models\CHos::find()->orderBy(['hospital' => SORT_ASC])->all(), 
                        'code5', 'hospital'),
                'language' => 'th',
                'options' => ['placeholder' => ' เลือกรหัสหน่วยงาน...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
    </div>
     <div class="col-xs-2 col-sm-2 col-md-2">
            <?=
            $form->field($model, 'hcode')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(app\models\CHos::find()->orderBy(['code5' => SORT_ASC])->all(), 
                        'code5', 'code5'),
                'language' => 'th',
                'options' => ['placeholder' => ' เลือกรหัสหน่วยงาน...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
     </div>
    
</div>

    <?= $form->field($model, 'hname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amphur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tumbon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rank_cup')->textInput() ?>

    <?= $form->field($model, 'rank_sso')->textInput() ?>

    <?= $form->field($model, 'rank_hos')->textInput() ?>

    <?= $form->field($model, 'rank_CR')->textInput() ?>

    <?= $form->field($model, 'b_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_budget')->textInput(['maxlength' => true]) ?>

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
