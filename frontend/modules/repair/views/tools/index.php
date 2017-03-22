<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\repair\models\ToolsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tools-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tools', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'hover'=>TRUE, //เมาส์โอเวอร์ 
        'striped'=>FALSE,// แถวสลับสีกัน
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],//เลขแถว

         //   'id',
            'name',
           // 'tooltype_id',
           // 'department_id',
            [
                'attribute' =>  'tooltype_id',
                'value'=>'tooltype.name',
            ],
            [
                'attribute' =>  'department_id',
                'value'=>'tooldep.name',
            ],
            
            [
                'attribute' =>  'price',
                'format'=>'integer',
            ],
            
            // 'datebuy',
            // 'use',
            [   
                'class' => '\kartik\grid\BooleanColumn',
                'attribute' => 'use',
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{update}{view}',
                'buttons'=> [ 
                    'update'=>  function ($url,$model){
                        return Html::a('<i class="glyphicon glyphicon-edit"> </i>',$url,['class'=>'btn btn-warning']);
                    },
                     
                    'view'=>  function ($url,$model){
                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>',$url,['class'=>'btn btn-info']);
                    },
                ]
              ]
        ]
    ]); ?>
</div>
