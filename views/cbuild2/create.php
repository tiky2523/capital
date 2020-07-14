<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cbuild2 */

$this->title = 'Create Cbuild2';
$this->params['breadcrumbs'][] = ['label' => 'Cbuild2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbuild2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
