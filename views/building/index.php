<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuildingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คำขอสิ่งก่อสร้าง';
$this->params['breadcrumbs'][] = $this->title;
echo ExportMenu::widget([
    'dataProvider' => $dataProvider
]);
?>
<div class="building-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มสิ่งก่อสร้าง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    
       
    <div class="panel panel-default">
        <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i>รายการสิ่งก่อสร้าง</div>
        <div class="panel-body">
            <div class="row">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                //........
                'panel'=>[
                    'before'=>'รายงานรายการสิ่งก่อสร้าง',
                    'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s'),
                ],
                //.........
                'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                    'bud_type',
                    'f_year',
                    //'d_type',
                    //'hcode',
                    [
                        'attribute' => 'hname',
                        'value' => 'chos.hospital',
                    ],
                    //'rank_cup',
                    //'rank_sso',
                    //'rank_hos',
                    //'rank_CR',
                    'b_list',
                    //[
                    //'attribute'=>'b_type',
                    //'value'=>'cbuild.s_name',
                    //],
                    //'p_type',
                    //'p_no',
                    [
                        'attribute' => 'u_price',
                        'format' => ['decimal', 2]
                    ],
                    'unit_no',
                    //'b_binding1',
                    //'b_binding2',
                    //'b_binding3',
                    [
                        'attribute' => 't_budget',
                        'format' => ['decimal', 2]
                    ],
                    //'b_locate',
                    //[
                    //'attribute'=>'amphur',
                    //'value'=>'amp.AMPHUR_NAME',
                    //],
                    //[
                    //'attribute'=>'tumbon',
                    //'value'=>'dist.DISTRICT_NAME',
                    //],
                    //'hos_lev',
                    //'t_build',
                    //'reason',
                    //'l_time',
                    //[
                    // 'attribute'=>'pop',
                    // 'format' => ['decimal', 0]
                    //],
                    //[
                    // 'attribute'=>'active_bed',
                    // 'format' => ['decimal', 2]
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


</div>
