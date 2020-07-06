<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รหัสสถานบริการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code5',
            'code9',
            'hospital',
            'type_hos',
            'province',
            //'amphur',
            //'tumbon',
            //'moo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
