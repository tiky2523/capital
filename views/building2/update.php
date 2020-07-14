<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */

$this->title = 'Update Building2: ' . $model->id_building;
$this->params['breadcrumbs'][] = ['label' => 'Building2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_building, 'url' => ['view', 'id' => $model->id_building]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="building2-update">
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
