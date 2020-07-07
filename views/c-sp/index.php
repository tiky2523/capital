<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CSpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'C Sps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create C Sp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code_sp',
            'sp_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
