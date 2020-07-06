<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chos */

$this->title = 'เพิ่มข้อมูล';
$this->params['breadcrumbs'][] = ['label' => 'Chos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
