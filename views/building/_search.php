<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuildingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_building') ?>

    <?= $form->field($model, 'bud_type') ?>

    <?= $form->field($model, 'f_year') ?>

    <?= $form->field($model, 'd_type') ?>

    <?= $form->field($model, 'hcode') ?>

    <?php // echo $form->field($model, 'hname') ?>

    <?php // echo $form->field($model, 'rank_cup') ?>

    <?php // echo $form->field($model, 'rank_sso') ?>

    <?php // echo $form->field($model, 'rank_hos') ?>

    <?php // echo $form->field($model, 'rank_CR') ?>

    <?php // echo $form->field($model, 'b_list') ?>

    <?php // echo $form->field($model, 'b_type') ?>

    <?php // echo $form->field($model, 'p_type') ?>

    <?php // echo $form->field($model, 'p_no') ?>

    <?php // echo $form->field($model, 'u_price') ?>

    <?php // echo $form->field($model, 'unit_no') ?>

    <?php // echo $form->field($model, 'b_binding1') ?>

    <?php // echo $form->field($model, 'b_binding2') ?>

    <?php // echo $form->field($model, 'b_binding3') ?>

    <?php // echo $form->field($model, 't_budget') ?>

    <?php // echo $form->field($model, 'b_locate') ?>

    <?php // echo $form->field($model, 'amphur') ?>

    <?php // echo $form->field($model, 'tumbon') ?>

    <?php // echo $form->field($model, 'hos_lev') ?>

    <?php // echo $form->field($model, 't_build') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'l_time') ?>

    <?php // echo $form->field($model, 'pop') ?>

    <?php // echo $form->field($model, 'opd_visit') ?>

    <?php // echo $form->field($model, 'active_bed') ?>

    <?php // echo $form->field($model, 'SUM_AdjRw') ?>

    <?php // echo $form->field($model, 'EC') ?>

    <?php // echo $form->field($model, 'ES') ?>

    <?php // echo $form->field($model, 'PCC') ?>

    <?php // echo $form->field($model, 'Famine') ?>

    <?php // echo $form->field($model, 'new_b') ?>

    <?php // echo $form->field($model, 'personels') ?>

    <?php // echo $form->field($model, 'd_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
