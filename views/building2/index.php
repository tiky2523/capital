<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Building2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คำขอครุภัณฑ์';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มรายการครุภัณฑ์', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i>รายการครุภัณฑ์</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                //........
                'panel'=>[
                    'before'=>' '
                ],
                //.........
                'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                    //'id_building',
                    'bud_type',
                    'f_year',
                    //'d_type',
                    //'hmain',
                    //'hcode',
                    [
                        'attribute' => 'hname',
                        'value' => 'chos.hospital',
                    ],
                    //[
                    //'attribute'=>'amphur',
                    //'value'=>'amp.AMPHUR_NAME',
                    //],
                    //[
                    //'attribute'=>'tumbon',
                    //'value'=>'dist.DISTRICT_NAME',
                    //],
                    //'rank_cup',
                    //'rank_sso',
                    //'rank_hos',
                    //'rank_CR',
                    'b_list',
                    //[
                    //'attribute'=>'p_type',
                    //'value'=>'cbuild2.s_name',
                    //],
                    //'p_no',
                    [
                        'attribute' => 'u_price',
                        'format' => ['decimal', 2]
                    ],
                    'unit_no',
                    //[
                    //'attribute'=>'budget',
                    //'format' => ['decimal', 2]
                    //],
                    [
                        'attribute' => 't_budget',
                        'format' => ['decimal', 2]
                    ],
                    //'hos_lev',
                    //'t_build',
                    //'reason',
                    //'l_time',
                    //[
                    //'attribute'=>'pop',
                    //'format' => ['decimal', 0]
                    //],
                    //[
                    //'attribute'=>'active_bed',
                    //'format' => ['decimal', 2]
                    //],
                    //[
                    //'attribute'=>'SUM_AdjRw',
                    //'format' => ['decimal', 2]
                    //],
                    //'EC',
                    //'ES',
                    //'PCC',
                    //'Famine',
                    //'new_b',
                    //'personels',
                    'd_update',
                        ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>


</div>
