<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\number\NumberControl;

/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = $model->hcode . '' . $model->b_list;
$this->params['breadcrumbs'][] = ['label' => 'Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="building-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_building], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id_building], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bud_type',
  
            'f_year',
            'd_type',
            'hcode',
            [
                'attribute' => 'hname',
                'value' => $model->chos->hospital,
            ],
            'rank_cup',
            'rank_sso',
            'rank_hos',
            'rank_CR',
            'b_list',
                [
                'attribute' => 'b_type',
                'value' => $model->cbuild->s_name,
            ],
            'p_type',
            'p_no',
            
            [
                'attribute' => 'u_price',
                'format' => ['decimal', 2]
            ],
            'unit_no',
            
            ['attribute' => 'b_binding1','format' => ['decimal', 2] ],
            
            ['attribute' => 'b_binding2','format' => ['decimal', 2] ],
            
            ['attribute' => 'b_binding3','format' => ['decimal', 2] ],
            
            [
                'attribute' => 't_budget',
                'format' => ['decimal', 2]
            ],
            'b_locate',
            ['attribute' => 'amphur','value' => $model->amp->AMPHUR_NAME,],
                [
                'attribute' => 'tumbon',
                'value' => $model->dist->DISTRICT_NAME,
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
    ])
    ?>

</div>
