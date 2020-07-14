<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_build2".
 *
 * @property string $code_b รหัสประเภทสิ่งก่อสร้าง
 * @property string|null $s_name ชื่อประเภทสิ่งก่อสร้างแบบสั้น
 */
class CBuild2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_build2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_b'], 'required'],
            [['code_b'], 'string', 'max' => 10],
            [['s_name'], 'string', 'max' => 100],
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
        ];
    }
    public function getBuilding2(){
        return $this->hasMany(Building2::className(), ['p_tpye'=>'code_b']);
    }
}
