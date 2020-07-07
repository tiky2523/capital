<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Amphures */

$this->title = 'Update Amphures: ' . $model->AMPHUR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Amphures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AMPHUR_ID, 'url' => ['view', 'id' => $model->AMPHUR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="amphures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
