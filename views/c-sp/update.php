<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CSp */

$this->title = 'Update C Sp: ' . $model->code_sp;
$this->params['breadcrumbs'][] = ['label' => 'C Sps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code_sp, 'url' => ['view', 'id' => $model->code_sp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="csp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
