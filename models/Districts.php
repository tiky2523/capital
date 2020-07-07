<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "districts".
 *
 * @property int $DISTRICT_ID
 * @property string $DISTRICT_CODE
 * @property string $DISTRICT_NAME
 * @property int $AMPHUR_ID
 * @property int $PROVINCE_ID
 * @property int $GEO_ID
 */
class Districts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'districts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DISTRICT_CODE', 'DISTRICT_NAME'], 'required'],
            [['AMPHUR_ID', 'PROVINCE_ID', 'GEO_ID'], 'integer'],
            [['DISTRICT_CODE'], 'string', 'max' => 6],
            [['DISTRICT_NAME'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DISTRICT_ID' => 'District ID',
            'DISTRICT_CODE' => 'รหัสตำบล',
            'DISTRICT_NAME' => 'ชื่อตำบล',
            'AMPHUR_ID' => 'Amphur ID',
            'PROVINCE_ID' => 'Province ID',
            'GEO_ID' => 'Geo ID',
        ];
    }
    public function getBuilding(){
        return $this->hasMany(Building::className(), ['tumbon'=>'DISTRICT_COME']);
    }
     public function getAmphures(){
        return $this->hasone(Amphures::className(), ['AMPHUR_ID'=>'AMPHUR_ID']);
    }
    public function getProvinces(){
        return $this->hasone(Provinces::className(), ['PROVINCE_ID'=>'PROVINCE_ID']);
    }
}
