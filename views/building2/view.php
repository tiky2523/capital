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
            'id_building',
            'bud_type',
            'f_year',
            'd_type',
            'hmain',
            'hcode',
            'hname',
            'amphur',
            'tumbon',
            'rank_cup',
            'rank_sso',
            'rank_hos',
            'rank_CR',
            'b_list',
            'p_type',
            'p_no',
            'u_price',
            'unit_no',
            'budget',
            't_budget',
            'hos_lev',
            't_build',
            'reason',
            'l_time',
            'pop',
            'opd_visit',
            'active_bed',
            'SUM_AdjRw',
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
