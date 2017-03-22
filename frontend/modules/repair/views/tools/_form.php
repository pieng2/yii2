<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model frontend\modules\repair\models\Tools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?=$form->field($model, 'tooltype_id')->widget(\kartik\widgets\Select2::className(),[
        'data'=>  yii\helpers\ArrayHelper::map(frontend\modules\repair\models\Tooltypes::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'เลือกประเภท...'
            
        ],
        'pluginOptions'=>[
            'allowClear'=>TRUE
        ]
        
        
    ])?>

   
     <?=    $form->field($model, 'department_id')->widget(\kartik\widgets\Select2::className(),[
        'data'=>  yii\helpers\ArrayHelper::map(frontend\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'เลือกแผนก...'
            
        ],
        'pluginOptions'=>[
            'allowClear'=>TRUE
        ]
        
        
    ])?>
    

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datebuy')->widget(kartik\widgets\DatePicker::className(),[
        'language'=>'th',
        'options' => ['placeholder' => 'ระบุวันที่ ...'],
	'pluginOptions' => [
		'format' => 'yyyy-mm-dd',
		'todayHighlight' => true
	]
    ]) ?>

        <?= $form->field($model, 'use')->widget(kartik\checkbox\CheckboxX::className(),[
            'pluginOptions'=>[
                'threeStat'=>FALSE
            ]
        ]) ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ?'<i class="glyphicon glyphicon-ok"></i>บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
