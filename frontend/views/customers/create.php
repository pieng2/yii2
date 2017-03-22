<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customers */

$this->title = 'Create Customers';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-pencil"></i>บันทึกข้อมูลส่วนตัว </div>
        <div class="panel-body">


            <?=
            $this->render('_form', [
                'model' => $model,
                'amp' => [],
                'tmb' => []
            ])
            ?>
        </div>
    </div>
</div>
