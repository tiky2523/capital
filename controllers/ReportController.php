<?php

namespace app\controllers;
use yii;

class ReportController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionReport1(){
        $sql="SELECT building.f_year, 
        building.bud_type, 
        building.amphur, 
        amphures.AMPHUR_NAME, 
        Count(building.id_building) AS จำนวนรายการที่ขอ, 
        Sum(building.t_budget) AS จำนวนงบประมาณ
        FROM building LEFT JOIN amphures ON building.amphur = amphures.AMPHUR_ID
        GROUP BY building.f_year, building.bud_type, building.amphur, amphures.AMPHUR_NAME
        ORDER BY building.f_year, building.amphur, amphures.AMPHUR_NAME;";
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
      return $this->render('report1',[
          'dataProvider'=>$dataProvider
      ]);
    }
    
    public function actionReport3 ($amphur) {
        $sql = "SELECT 
            building.bud_type, 
            building.f_year, 
            building.hcode, 
            building.hname, 
            building.rank_cup, 
            building.b_list, 
            building.u_price, 
            building.unit_no, 
            building.t_budget, 
            building.b_locate, 
            building.amphur, 
            building.tumbon, 
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
          'dataProvider'=>$dataProvider
      ]);
    }

}
