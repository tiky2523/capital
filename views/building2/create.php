<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building2 */

$this->title = 'เพิ่มรายการครุภัณฑ์';
$this->params['breadcrumbs'][] = ['label' => 'รายการครุภัณฑ์', 'url' => ['index']];
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
