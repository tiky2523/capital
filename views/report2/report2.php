
<?php
use kartik\grid\GridView;

$this->title = 'รายงานสรุปจำนวนรายการครุภัณฑ์';
$this->params ['breadcrambs'][]=['label'=>'รายงาน','url'=>['report2/index']];
$this->params['breadcrumbs'][] = $this->title;

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>'รายงานสรุปจำนวนรายการ และผลรวมงบประมาณคำขอครุภัณฑ์',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s'),
                ]]
                )
                ?>