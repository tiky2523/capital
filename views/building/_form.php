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
/* @var $model app\models\Building */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'bud_type')->dropDownList([
                'งบลงทุน' => 'งบลงทุน',
                'งบค่าเสื่อม' => 'งบค่าเสื่อม',
                    ], ['prompt' => 'เลือกประเภทงบประมาณ...'])
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
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

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'hname')->widget(DepDrop::className(), [
                'data' => $chos,
                'options' => ['placeholder' => 'เลือกหน่วยงาน...'],
                'type' => DepDrop::TYPE_SELECT2,
                'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                'pluginOptions' => [
                    'depends' => ['building-hcode'],
                    'url' => yii\helpers\Url::to(['/building/get-chos']),
                    'loadingText' => 'กำลังค้นข้อมูล...',
                ],
            ]);
            ?>
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
<?= $form->field($model, 'b_list')->textarea(['row' => 6]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'b_type')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(app\models\CBuild::find()->
                        orderBy(['code_b' => SORT_ASC])->all(), 'code_b', 's_name'),
                'language' => 'th',
                'options' => ['placeholder' => 'เลือกประเภทอาคารสิ่งก่อสร้าง...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'p_type')->dropDownList([
                'แบบมาตรฐาน' => 'แบบมาตรฐาน',
                'แบบออกแบบเอง' => 'แบบออกแบบเอง',
                    ], ['prompt' => 'เลือกประเภทแบบแปลน...'])
            ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'p_no')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'u_price')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'unit_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'b_binding1')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'b_binding2')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'b_binding3')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 't_budget')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'b_locate')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'amphur')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(app\models\Amphures::find()->orderBy(['AMPHUR_ID' => SORT_ASC])->all(), 
                        'AMPHUR_ID', 'AMPHUR_NAME'),
                'language' => 'th',
                'options' => ['placeholder' => ' เลือกอำเภอ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'tumbon')->widget(DepDrop::className(), [
                'data' => $tum,
                'options' => ['placeholder' => 'คลิกเลือกตำบล...'],
                'type' => DepDrop::TYPE_SELECT2,
                'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                'pluginOptions' => [
                    'depends' => ['building-amphur'],
                    'url' => yii\helpers\Url::to(['/building/get-dist']),
                    'loadingText' => 'กำลังค้นข้อมูล...',
                ],
            ]);
            ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'hos_lev')->dropdownList(
            ArrayHelper::map(\app\models\CSp::find()->all(),
                    'code_sp', 
                    'sp_name'),
            [
                'id'=>'ddl-CSp',
                'prompt'=>'เลือกระดับสถานบริการ....'
]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 't_build')->dropDownList([
                'ปรับปรุง' => 'ปรับปรุง',
                'สร้างใหม่' => 'สร้างใหม่',
                'ทดแทน' => 'ทดแทน',
                    ], ['prompt' => 'เลือกประเภทคำขอ...'])
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
<?= $form->field($model, 'reason')->textarea(['row' => 6]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'l_time')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'pop')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'opd_visit')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'active_bed')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'SUM_AdjRw')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => ' ',
        'suffix' => ' ',
        'allowMinus' => false
    ]

]); ?>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <?= $form->field($model, 'EC')->textarea(['row' => 8]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
<?= $form->field($model, 'ES')->textarea(['row' => 6]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'PCC')->dropDownList([
                'แม่ข่าย PCC' => 'แม่ข่าย PCC',
                'ลูกข่าย PCC' => 'ลูกข่าย PCC',
                    ], ['prompt' => 'เลือกประเภท PCC...'])
            ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'Famine')->dropDownList([
                'พื้นที่ชุมชนเมือง' => 'พื้นที่ชุมชนเมือง',
                'พื้นที่ปกติ 1' => 'พื้นที่ปกติ 1',
                'พื้นที่ปกติ 2' => 'พื้นที่ปกติ 2',
                'พื้นที่ปกติ 3' => 'พื้นที่ปกติ 3',
                'พื้นที่เฉพาะระดับ 1' => 'พื้นที่เฉพาะระดับ 1',
                'พื้นที่เฉพาะระดับ 2' => 'พื้นที่เฉพาะระดับ 2',
                    ], ['prompt' => 'เลือกระดับความกันดาร...'])
            ?>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
<?= $form->field($model, 'new_b')->textarea(['row' => 8]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
        <?= $form->field($model, 'personels')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
    <?= $form->field($model, 'd_update')->widget(DatePicker::className(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd ',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>
    </div>

    <div class="form-group">
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
