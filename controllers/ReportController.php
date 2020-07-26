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
        $sql="SELECT building.f_year, building.amphur, 
            Count(building.id_building) AS จำนวนรายการ, 
            Sum(building.t_budget) AS ผลรวมงบประมาณ
        FROM building
        GROUP BY building.f_year, building.amphur
        ORDER BY building.f_year, building.amphur;";
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

}
