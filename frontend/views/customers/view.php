<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?= Html::img('img/' . $model->avatar, ['class' => 'img-responsive', 'width' => '150px;']); ?>
    <hr>
<?= DetailView::widget([
        'model' => $model,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'attributes' => [
            //'id',
            
            'name',
            //'addr',
            [
                'attribute'=>'addr',
                'value'=>$model->addr.' '.$model->custmb->name.' '.$model->cusamp->name.' '.$model->cuschw->name.' '.$model->p,
            ],
//            't',
//            'a',
//            'c',
            'birthday',
            'cid',
            'p',
            'tel',
            'work',
            'cusdep.name',
            //'group_id',
            'cuspos.name',
            'interest',
           // 'avatar',
            'fb',
            'line',
            'email:email',
//            'createdate',
//            'updatedate',
        ],
    ]) ?>

</div>