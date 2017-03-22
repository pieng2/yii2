<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\repair\models\Repairs */

$this->title = 'Update Repairs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="repairs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formboss', [
        'model' => $model,
        'tool'=>$tool,
    ]) ?>

</div>
