<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Building */

$this->title = 'บันทึกรายการคำขอสิ่งก่อสร้าง';
$this->params['breadcrumbs'][] = ['label' => 'รายการสิ่งก่อสร้าง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-create">
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
