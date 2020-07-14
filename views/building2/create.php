<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */

$this->title = 'Create Building2';
$this->params['breadcrumbs'][] = ['label' => 'Building2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building2-create">
    <div class="panel panel-success">
        <div class="panel-heading"><h3><i class="glyphicon glyphicon-pencil"></i>
                <?= Html::encode($this->title) ?></div>
        <div class="panel-body">

        <?=
        $this->render('_form', [
            'model' => $model,
            'chos' => [],
            'tum' => []
        ])
        ?>
        </div>

    </div>

</div>
