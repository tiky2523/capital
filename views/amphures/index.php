<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AmphuresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Amphures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="amphures-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Amphures', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AMPHUR_ID',
            'AMPHUR_CODE',
            'AMPHUR_NAME',
            'POSTCODE',
            'GEO_ID',
            //'PROVINCE_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
