
<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = 'รายงานสรุปจำนวนรายการสิ่งก่อสร้าง';
$this->params ['breadcrambs'][]=['label'=>'รายงาน','url'=>['report/index']];
$this->params['breadcrumbs'][] = $this->title;

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>'รายงานสรุปจำนวนรายการ และผลรวมงบประมาณคำขอสิ่งก่อสร้าง',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s')
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
                        'label'=>'รหัสอำเภอ',
                        'format'=>'raw',
                        'value'=>function($model){
                            $amphur=$model['amphur'];
                            return Html::a(Html::encode($amphur),
                                    ['report/report3','amphur'=>$amphur]);
                        }
                       
                    ],
                    [
                        'attribute'=>'AMPHUR_NAME',
                        'header'=>'ชื่ออำเภอ',
                        
                    ],
                    [
                        'attribute'=>'จำนวนรายการที่ขอ',
                        'format'=>['decimal', 0]
                    ],
                    [
                        'attribute'=>'จำนวนงบประมาณ',
                        'format'=>['decimal', 2]
                    ],
                ]
        ]
                );
                ?>


