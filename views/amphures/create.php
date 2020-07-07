<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Amphures */

$this->title = 'Create Amphures';
$this->params['breadcrumbs'][] = ['label' => 'Amphures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="amphures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
