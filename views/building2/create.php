<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */

$this->title = 'Create Building2';
$this->params['breadcrumbs'][] = ['label' => 'Building2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
