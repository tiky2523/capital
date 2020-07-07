<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cbuild */

$this->title = 'Create Cbuild';
$this->params['breadcrumbs'][] = ['label' => 'Cbuilds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbuild-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
