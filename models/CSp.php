<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_sp".
 *
 * @property string $code_sp รหัสประเภทสิ่งก่อสร้าง
 * @property string|null $sp_name ชื่อประเภทสิ่งก่อสร้างแบบสั้น
 */
class CSp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_sp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_sp'], 'required'],
            [['code_sp'], 'string', 'max' => 10],
            [['sp_name'], 'string', 'max' => 100],
            [['code_sp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code_sp' => 'รหัสประเภทสิ่งก่อสร้าง',
            'sp_name' => 'ชื่อประเภทสิ่งก่อสร้างแบบสั้น',
        ];
    }
    public function getBuilding(){
        return $this->hasMany(Building::className(), ['hos_lev'=>'code_sp']);
    }
    public function getBuilding2(){
        return $this->hasMany(Building2::className(), ['hos_lev'=>'code_sp']);
    }
}
