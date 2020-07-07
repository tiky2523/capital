<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CbuildSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cbuilds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbuild-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cbuild', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code_b',
            's_name',
            'l_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
