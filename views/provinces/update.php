<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Provinces */

$this->title = 'Update Provinces: ' . $model->PROVINCE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PROVINCE_ID, 'url' => ['view', 'id' => $model->PROVINCE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provinces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
