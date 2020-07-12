<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuildingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คำขอสิ่งก่อสร้าง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มสิ่งก่อสร้าง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bud_type',
            'f_year',
            'd_type',
            //'hcode',
            [
                'attribute'=>'hname',
                'value'=>'chos.hospital',
            ],
            'rank_cup',
            'rank_sso',
            'rank_hos',
            'rank_CR',
            'b_list',
            [
                'attribute'=>'b_type',
                'value'=>'cbuild.s_name',
            ],
            'p_type',
            'p_no',
            'u_price',
            'unit_no',
            //'b_binding1',
            //'b_binding2',
            //'b_binding3',
            't_budget',
            'b_locate',
            [
                'attribute'=>'amphur',
                'value'=>'amp.AMPHUR_NAME',
            ],
            [
                'attribute'=>'tumbon',
                'value'=>'dist.DISTRICT_NAME',
            ],
            
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
