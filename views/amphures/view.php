<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Amphures */

$this->title = $model->AMPHUR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Amphures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="amphures-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AMPHUR_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AMPHUR_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AMPHUR_ID',
            'AMPHUR_CODE',
            'AMPHUR_NAME',
            'POSTCODE',
            'GEO_ID',
            'PROVINCE_ID',
        ],
    ]) ?>

</div>
