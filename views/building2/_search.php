<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Building2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building2-search">
    <div class="panel panel-default">
        <div class="panel-heading"><i class="glyphicon glyphicon-search"></i>ค้นหาข้อมูลครุภัณฑ์</div>
        <div class="panel-body">

            <div class="row">
                <?php
                $form = ActiveForm::begin([
                            'action' => ['index'],
                            'method' => 'get',
                ]);
                ?>

                <?php // echo $form->field($model, 'id_building') ?>

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

                <?php // echo $form->field($model, 'hmain') ?>

                <?php // echo $form->field($model, 'hcode') ?>

                <div class="col-xs-2 col-sm-2 col-md-2">
                    <?=
                    $form->field($model, 'hcode')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(app\models\CHos::find()->orderBy(['code5' => SORT_ASC])->all(), 'code5', 'code5'),
                        'language' => 'th',
                        'options' => ['placeholder' => ' เลือกรหัสหน่วยงาน...'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>

                <?php // echo $form->field($model, 'hname') ?>


                <?php // echo $form->field($model, 'amphur')  ?>

                <div class="col-xs-2 col-sm-2 col-md-2">
                    <?=
                    $form->field($model, 'amphur')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(app\models\Amphures::find()->orderBy(['AMPHUR_ID' => SORT_ASC])->all(), 'AMPHUR_ID', 'AMPHUR_NAME'),
                        'language' => 'th',
                        'options' => ['placeholder' => ' เลือกอำเภอ...'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>

                <?php // echo $form->field($model, 'tumbon')  ?>

                <?php // echo $form->field($model, 'rank_cup')  ?>

                <?php // echo $form->field($model, 'rank_sso')  ?>

                <?php // echo $form->field($model, 'rank_hos')  ?>

                <?php // echo $form->field($model, 'rank_CR')  ?>

                <?php // echo $form->field($model, 'b_list')  ?>

                <?php // echo $form->field($model, 'p_type')  ?>

                <?php // echo $form->field($model, 'p_no')  ?>

                <?php // echo $form->field($model, 'u_price')  ?>

                <?php // echo $form->field($model, 'unit_no')  ?>

                <?php // echo $form->field($model, 'budget')  ?>

                <?php // echo $form->field($model, 't_budget')  ?>

                <?php // echo $form->field($model, 'hos_lev')  ?>

                <?php // echo $form->field($model, 't_build')  ?>

                <?php // echo $form->field($model, 'reason')  ?>

                <?php // echo $form->field($model, 'l_time')  ?>

                <?php // echo $form->field($model, 'pop')  ?>

                <?php // echo $form->field($model, 'opd_visit')  ?>

                <?php // echo $form->field($model, 'active_bed')  ?>

                <?php // echo $form->field($model, 'SUM_AdjRw')  ?>

                <?php // echo $form->field($model, 'EC')  ?>

                <?php // echo $form->field($model, 'ES')  ?>

                <?php // echo $form->field($model, 'PCC')  ?>

                <?php // echo $form->field($model, 'Famine')  ?>

                <?php // echo $form->field($model, 'new_b')  ?>

                <?php // echo $form->field($model, 'personels')  ?>

                <?php // echo $form->field($model, 'd_update')   ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('ค้นหา', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('ล้าง', ['class' => 'btn btn-outline-secondary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
