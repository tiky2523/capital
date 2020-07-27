<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = 'รายการรายอำเภอ';
$this->params ['breadcrambs'][]=['label'=>'รายงาน','url'=>['report/index']];
$this->params['breadcrumbs'][] = $this->title;
$datas =$dataProvider->getModels();


    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>'รายการสิ่งก่อสร้างรายอำเภอ',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s')
                ],
        ]);
                ?>


