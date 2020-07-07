<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cbuild */

$this->title = 'Update Cbuild: ' . $model->code_b;
$this->params['breadcrumbs'][] = ['label' => 'Cbuilds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code_b, 'url' => ['view', 'id' => $model->code_b]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cbuild-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
