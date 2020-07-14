<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "amphures".
 *
 * @property int $AMPHUR_ID
 * @property string $AMPHUR_CODE
 * @property string $AMPHUR_NAME
 * @property string $POSTCODE
 * @property int $GEO_ID
 * @property int $PROVINCE_ID
 */
class Amphures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'amphures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AMPHUR_CODE', 'AMPHUR_NAME', 'POSTCODE'], 'required'],
            [['GEO_ID', 'PROVINCE_ID'], 'integer'],
            [['AMPHUR_CODE'], 'string', 'max' => 4],
            [['AMPHUR_NAME'], 'string', 'max' => 150],
            [['POSTCODE'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'AMPHUR_ID' => 'Amphur ID',
            'AMPHUR_CODE' => 'รหัสอำเภอ',
            'AMPHUR_NAME' => 'ชื่ออำเภอ',
            'POSTCODE' => 'รหัสไปรษณีย์',
            'GEO_ID' => 'Geo ID',
            'PROVINCE_ID' => 'Province ID',
        ];
    }
    public function getBuilding(){
        return $this->hasMany(Building::className(), ['amphur'=>'AMPHUR_COME']);
    }
    public function getProvinces(){
        return $this->hasone(Provinces::className(), ['PROVINCE_ID'=>'PROVINCE_ID']);
    }
    public function getDist (){
        return $this->hasmany(Provinces::className(), ['AMPHUR_ID'=>'AMPHUR_ID']);
    }
    public function getBuilding2(){
        return $this->hasMany(Building2::className(), ['amphur'=>'AMPHUR_COME']);
    }
}
