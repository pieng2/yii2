<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\repair\models\ToolsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tools-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'tooltype_id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'datebuy') ?>

    <?php // echo $form->field($model, 'use') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
