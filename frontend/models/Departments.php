<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property integer $id
 * @property string $name
 * @property integer $group_id
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'แผนก',
            'group_id' => 'กลุ่มงาน',
        ];
    }
    
   public function getDepgroup(){
     
        return $this->hasOne(Groups::className(), ['id'=>'group_id']);   
    }
   public function getDepcus(){
     
        return $this->hasmany(Customers::className(), ['department_id'=>'id']);   
    }
    
}
