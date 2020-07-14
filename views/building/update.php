<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = 'ยืนยัน/แก้ไขรายการ: ' . $model->b_list;
$this->params['breadcrumbs'][] = ['label' => 'Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_building, 'url' => ['view', 'id' => $model->id_building]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="building-update">
    <div class="panel panel-warning">
        <div class="panel-heading"><h3><i class="glyphicon glyphicon-edit"></i>
        <?= Html::encode($this->title) ?></div>
        <div class="panel-body">
    
    
    <?= $this->render('_form', [
        'model' => $model,
        'chos'=>$chos,
        'tum'=>$tum

    ]) ?>
        </div>
    </div>
