<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = 'ยืนยันการเพิ่มรายการ: ' . $model->hname;
$this->params['breadcrumbs'][] = ['label' => 'Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_building, 'url' => ['view', 'id' => $model->id_building]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="building-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'chos'=>$chos,
        'tum'=>$tum

    ]) ?>

</div>
