<?php

namespace app\controllers;

class Report2Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionReport2(){
        $sql="SELECT 
            building2.f_year, 
            building2.bud_type,
            building2.amphur, 
            amphures.AMPHUR_NAME, 
            Count(building2.id_building) AS จำนวนรายการ, 
            Sum(building2.t_budget) AS จำนวนงบที่ขอ
            FROM building2 
            LEFT JOIN amphures ON building2.amphur = amphures.AMPHUR_ID
            GROUP BY building2.f_year, building2.amphur, amphures.AMPHUR_NAME
            ORDER BY building2.f_year, building2.amphur, amphures.AMPHUR_NAME;";
        //$rawData= \yii::$app->db->createCommand($sql)->queryAll();
        
        //print_r($rawData);
        
      try{
          $rawData= \yii::$app->db->createCommand($sql)->queryAll();
      }  catch(\yii\dbException $e){
          throw new \yii\web\ConflictHttpException('sql error');
      }
      $dataProvider=new \yii\data\ArrayDataProvider([
          'allModels'=>$rawData,
          'pagination'=>FALSE,
      ]);
      return $this->render('report2',[
          'dataProvider'=>$dataProvider
      ]);
    }
    public function actionReport3 ($amphur=null) {
        $sql = "SELECT 
            building2.bud_type, 
            building2.f_year, 
            building2.hcode, 
            building2.hname, 
            building2.rank_cup, 
            building2.b_list, 
            building2.u_price, 
            building2.unit_no, 
            building2.t_budget, 
            building2.amphur, 
            building2.tumbon, 
            FROM building WHERE building.amphur=$amphur";
    try{
          $rawData= \yii::$app->db->createCommand($sql)->queryAll();
      }  catch(\yii\dbException $e){
          throw new \yii\web\ConflictHttpException('sql error');
      }
      $dataProvider=new \yii\data\ArrayDataProvider([
          'allModels'=>$rawData,
          'pagination'=>FALSE,
      ]);
      return $this->render('report3',[
          'dataProvider'=>$dataProvider,
          'rawData'=>$rawdData,
          'sql'=>$sql,
      ]);
    }
}
