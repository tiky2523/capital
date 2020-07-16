<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */

$this->title = $model->hname;
$this->params['breadcrumbs'][] = ['label' => 'รายการครุภัณฑ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="building2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_building], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_building], [
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
            //'id_building',
            'bud_type',
            'f_year',
            'd_type',
            'hmain',
            //'hcode',
            'hname',
            [
                'attribute' => 'amphur',
                'value' => $model->amp->AMPHUR_NAME,
            ],
                [
                'attribute' => 'tumbon',
                'value' => $model->dist->DISTRICT_NAME,
            ],
            'rank_cup',
            'rank_sso',
            'rank_hos',
            'rank_CR',
            'b_list',
            [
                'attribute' => 'p_type',
                'value' => $model->cbuild2->s_name,
            ],
            'p_no',
            [
                'attribute' => 'u_price',
                'format' => ['decimal', 2]
            ],
            'unit_no',
             [
                'attribute' => 'budget',
                'format' => ['decimal', 2]
            ],
             [
                'attribute' => 't_budget',
                'format' => ['decimal', 2]
            ],
             ['attribute' => 'hos_lev',
                'value' => $model->csp->sp_name,
            ],
            't_build',
            'reason',
            'l_time',
            [
                'attribute' => 'pop',
                'format' => ['decimal', 0]
            ],
            [
                'attribute' => 'opd_visit',
                'format' => ['decimal', 2]
            ],
            
            [
                'attribute' => 'active_bed',
                'format' => ['decimal', 2]
            ],
            
            [
                'attribute' => 'SUM_AdjRw',
                'format' => ['decimal', 2]
            ],
            'EC',
            'ES',
            'PCC',
            'Famine',
            'new_b',
            'personels',
            'd_update',
        ],
    ]) ?>

</div>
