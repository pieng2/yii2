<?php
use yii\helpers\Html;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'สมาชิก';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> เพิ่มสมาชิก', ['create'], ['class' => 'btn btn-info']) ?>
    </p><br><br>
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> ทะเบียนสมาชิก</div>
        <div class="panel-body">
            <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'attribute'=>'avatar',
                'format'=>'html',
                'value'=> function($model){
                    return Html::img('img/'.$model->avatar,['class'=>'img-reponsive','style'=>'width: 80px;']);
                }
            ],
            'name',
            [
                'attribute'=>'addr',
                'value'=> function($model){
                    return $model->addr.' '.$model->custmb->name.' '.$model->cusamp->name.' '.$model->cuschw->name.' '.$model->p;
                }
            ],
//            'addr',
//            't',
//            'a',
//             'c',             
             [
                'attribute'=>'birthday',
                'value'=> function($model){
                    return DateThai($model->birthday);
                }
            ],       
             //'cid',
             //'p',
             'tel',
            // 'work',
            [
                'attribute'=> 'department_id',
                'value'=> 'cusdep.name'
            ], 
            [
                'attribute'=> 'position_id',
                'value'=> 'cuspos.name'
            ],
             //'group_id',            
             'interest',            
//             'fb',
//             'line',
//             'email:email',
//             'createdate',
//             'updatedate',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>    
</div>

<?php function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		//$strYear=substr($strYear,2,2);
		return "$strDay $strMonthThai $strYear";
	}      
?>
