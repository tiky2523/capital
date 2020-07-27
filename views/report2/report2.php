
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
                ],
        'columns'=>[
                    ['class'=>'yii\grid\SerialColumn'],
                    [
                        'attribute'=>'f_year',
                        'header'=>'ปีงบประมาณ',
                    ],
                    [
                        'attribute'=>'bud_type',
                        'header'=>'ประเภทงบ',
                    ],
                    [
                        'attribute'=>'amphur',
                        'header'=>'รหัสอำเภอ',
                        
                       
                    ],
                    [
                        'attribute'=>'AMPHUR_NAME',
                        'header'=>'ชื่ออำเภอ',

                    ],
                    [
                       'attribute'=>'จำนวนรายการ',
                        'format'=>['decimal', 0]
                    ],
                    [
                        'attribute'=>'จำนวนงบที่ขอ',
                        'format'=>['decimal', 2]
                    ],
            ]
        ]
                );
                ?>