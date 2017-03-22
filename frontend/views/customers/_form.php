<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
//use yii\web\UploadedFile;
use kartik\widgets\FileInput;


/* @var $this yii\web\View */
/* @var $model frontend\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(['options'=>[
        'enctype'=>'multipart/form-data'
    ]]); ?>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
           <?= $form->field($model, 'p')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <div class="row">
         <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'birthday')->widget(kartik\widgets\DatePicker::className(),[
        'language'=>'th',
        'options' => ['placeholder' => 'ระบุวันที่ ...'],
	'pluginOptions' => [
		'format' => 'yyyy-mm-dd',
		'todayHighlight' => true
	]
    ]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'cid')->widget(yii\widgets\MaskedInput::className(),[
        'mask'=>'9-9999-99999-99-9',
        'clientOptions' => [
            'removeMaskOnSubmit' => true]
    ]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
    <?= $form->field($model, 'tel')->widget(yii\widgets\MaskedInput::className(),[
        'mask'=>'999-9999-999',
//        'clientOptions' => [
//                'removeMaskOnSubmit' => true]
    ]) ?>

        </div>        
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'c')->widget(Select2::className(),[
        'data'=> \yii\helpers\ArrayHelper::map(frontend\models\Chw::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'เลือกจังหวัด'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'a')->widget(DepDrop::classname(), [
    'data'=> [$amp],
    'options' => ['placeholder' => 'Select ...'],
    'type' => DepDrop::TYPE_SELECT2,
    'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
    'pluginOptions'=>[
        'depends'=>['customers-c'],
        'url' => Url::to(['/customers/get-amp']),
        'loadingText' => 'Loading child level 1 ...',
    ]
]);?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 't')->widget(DepDrop::classname(), [
    'data'=> [$tmb],
    'options' => ['placeholder' => 'Select ...'],
    'type' => DepDrop::TYPE_SELECT2,
    'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
    'pluginOptions'=>[
        'depends'=>['customers-c','customers-a'],
        'url' => Url::to(['/customers/get-tmb']),
        'loadingText' => 'Loading child level 2 ...',
    ]
]);?>

        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'position_id')->widget(kartik\widgets\Select2::className(),[
        'data'=> \yii\helpers\ArrayHelper::map(frontend\models\Positions::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'เลือกตำแหน่ง...'],
            'pluginOptions' => [
                'allowClear' => true
    ],
    ]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'department_id')->widget(kartik\widgets\Select2::className(),[
        'data'=> \yii\helpers\ArrayHelper::map(frontend\models\Departments::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'เลือกแผนก...'],
            'pluginOptions' => [
                'allowClear' => true
    ],
    ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'fb')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
             <?= $form->field($model, 'line')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <?= $form->field($model, 'interest')->checkboxList(frontend\models\Customers::itemAlias('interest'))?>
        </div>
    </div>

    <?php //echo $form->field($model, 'group_id')->textInput() ?>
    

    <?= $form->field($model, 'avatar_img')->label('รูปประจำตัว')->fileInput() ?>       
                  
    <?php if ($model->avatar) { ?>
            <?= Html::img('img/' . $model->avatar, ['class' => 'img-responsive img-circle', 'width' => '150px;']); ?>
    <?php } ?> 
    
    <hr>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>