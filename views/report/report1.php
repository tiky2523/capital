
<?php
use kartik\grid\GridView;

$this->title = 'รายงานสรุปจำนวนรายการสิ่งก่อสร้าง';
$this->params ['breadcrambs'][]=['label'=>'รายงาน','url'=>['report/index']];
$this->params['breadcrumbs'][] = $this->title;

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>'รายงานสรุปจำนวนรายการ และผลรวมงบประมาณคำขอสิ่งก่อสร้าง',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s'),
                ]]
                )
                ?>


