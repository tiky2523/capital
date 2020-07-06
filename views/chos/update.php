<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chos */

$this->title = 'Update Chos: ' . $model->code5;
$this->params['breadcrumbs'][] = ['label' => 'Chos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code5, 'url' => ['view', 'id' => $model->code5]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
