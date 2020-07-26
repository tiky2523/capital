
<?php
use kartik\grid\GridView;

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>'รายงานสรุปจำนวนรายการ และงบประมาณคำขอสิ่งก่อสร้าง',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s'),
                ]]
                )
                ?>


