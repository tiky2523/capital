
<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->params ['breadcrambs'][]=['label'=>'รายงาน','url'=>['report/index']];
$this->params['breadcrumbs'][] = 'รายอำเภอ';

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>'รายงานสรุปจำนวนรายการ และผลรวมงบประมาณคำขอสิ่งก่อสร้าง',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s')
                ],
                
        ]);
                ?>


