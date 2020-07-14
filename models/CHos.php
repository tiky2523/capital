<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_hos".
 *
 * @property string $code5 รหัส 5 หลัก
 * @property string|null $code9 รหัส 9 หลัก 
 * @property string|null $hospital ชื่อ
 * @property string|null $type_hos ประเภทหน่วยงาน
 * @property string|null $province รหัสจังหวัด
 * @property string|null $amphur รหัสอำเภอ
 * @property string|null $tumbon รหัสตำบล
 * @property string|null $moo รหัสหมู่
 */
class CHos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_hos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code5'], 'required'],
            [['code5'], 'string', 'max' => 20],
            [['code9', 'type_hos', 'province', 'amphur', 'tumbon'], 'string', 'max' => 50],
            [['hospital'], 'string', 'max' => 100],
            [['moo'], 'string', 'max' => 4],
            [['code5'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code5' => 'รหัส 5 หลัก',
            'code9' => 'รหัส 9 หลัก ',
            'hospital' => 'ชื่อ',
            'type_hos' => 'ประเภทหน่วยงาน',
            'province' => 'รหัสจังหวัด',
            'amphur' => 'รหัสอำเภอ',
            'tumbon' => 'รหัสตำบล',
            'moo' => 'รหัสหมู่',
        ];
    }
    public function getBuilding(){
        return $this->hasMany(Building::className(), ['hcode'=>'code5']);
    }
    public function getBuilding2(){
        return $this->hasMany(Building2::className(), ['hcode'=>'code5']);
    }
}
