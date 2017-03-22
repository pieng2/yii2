<?php

namespace frontend\modules\repair\models;

use Yii;

/**
 * This is the model class for table "repairs".
 *
 * @property integer $id
 * @property integer $department_id
 * @property string $datenotuse
 * @property integer $tool_id
 * @property string $problem
 * @property string $stage
 * @property string $startdate
 * @property string $satatus
 * @property string $dateplan
 * @property string $remark
 * @property string $answer
 * @property integer $engineer_id
 * @property string $enddate
 * @property integer $user_id
 * @property string $createDate
 * @property string $updateDate
 * @property string $approve
 */
class Repairs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repairs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id', 'problem', 'user_id'], 'required'],
            [['department_id', 'tool_id', 'engineer_id', 'user_id'], 'integer'],
            [['datenotuse', 'startdate', 'dateplan', 'enddate', 'createDate', 'updateDate'], 'safe'],
            [['problem', 'stage', 'satatus', 'remark', 'answer', 'approve'], 'string'],
            [['satatus'],'default','value'=>'รอรับงาน'],
            [ ['answer'],'default','value'=>'รอซ่อม'],
                
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'ฝ่าย/งาน',
            'datenotuse' => 'วันที่อุปกรณ์เสีย',
            'tool_id' => 'อุปกรณ์',
            'problem' => 'ปัญหาที่ซ่อม',
            'stage' => 'ระยะรอคอย',
            'startdate' => 'วันที่รับซ่อม',
            'satatus' => 'สถานะการแจ้ง',
            'dateplan' => 'กำหนดเสร็จภายในวันที่',
            'remark' => 'ช่างอธิบาย',
            'answer' => 'ช่างสรุปงาน',
            'engineer_id' => 'ช่าง',
            'enddate' => 'วันซ่อมเสร็จ',
            'user_id' => 'ผู้บันทึก',
            'createDate' => 'วันส่งซ่อม',
            'updateDate' => 'Update Date',
            'approve' => 'ความเห็นหัวหน้า',
        ];
    }
//    public function getRepairdep(){
//        return $this->hasMany(\frontend\models\Departments::classNpame(), ['department_id'=>'id']);
//    }
//    public function getRepairtool(){
//        return $this->hasMany(Tools::className(), ['tool_id'=>'id']);
//    }
//    
     public function getRepairdep(){
        return $this->hasOne(\frontend\models\Departments::className(), ['id'=>'department_id']);
    }
    public function getRepairtool(){
        return $this->hasOne(Tools::className(), ['id'=>'tool_id']);
    }
}
