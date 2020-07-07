<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_build".
 *
 * @property string $code_b รหัสประเภทสิ่งก่อสร้าง
 * @property string|null $s_name ชื่อประเภทสิ่งก่อสร้างแบบสั้น
 * @property string|null $l_name ชื่อสิ่งก่อสร้างแบบยาว
 */
class CBuild extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_build';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_b'], 'required'],
            [['code_b'], 'string', 'max' => 10],
            [['s_name', 'l_name'], 'string', 'max' => 100],
            [['code_b'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code_b' => 'รหัสประเภทสิ่งก่อสร้าง',
            's_name' => 'ชื่อประเภทสิ่งก่อสร้างแบบสั้น',
            'l_name' => 'ชื่อสิ่งก่อสร้างแบบยาว',
        ];
    }
    public function getBuilding(){
        return $this->hasMany(Building::className(), ['b_tpye'=>'code_b']);
    }
}
