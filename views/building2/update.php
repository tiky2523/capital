<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */

$this->title = 'Update Building2: ' . $model->id_building;
$this->params['breadcrumbs'][] = ['label' => 'Building2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_building, 'url' => ['view', 'id' => $model->id_building]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="building2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
