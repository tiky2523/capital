<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Building2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการครุภัณฑ์ลงทุนและค่าเสื่อม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มรายการครุภัณฑ์', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_building',
            'bud_type',
            'f_year',
            'd_type',
            'hmain',
            'hcode',
            'hname',
            'amphur',
            'tumbon',
            'rank_cup',
            'rank_sso',
            'rank_hos',
            'rank_CR',
            'b_list',
            'p_type',
            //'p_no',
            'u_price',
            'unit_no',
            'budget',
            't_budget',
            'hos_lev',
            't_build',
            'reason',
            'l_time',
            'pop',
            'opd_visit',
            'active_bed',
            'SUM_AdjRw',
            'EC',
            'ES',
            'PCC',
            'Famine',
            'new_b',
            'personels',
            'd_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
