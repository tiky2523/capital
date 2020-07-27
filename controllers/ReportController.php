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
        $sql = "SELECT building.bud_type, 
            building.f_year, 
            building.d_type, 
            building.hcode, 
            building.hname, 
            building.rank_cup, 
            building.rank_sso, 
            building.rank_hos, 
            building.rank_CR, 
            building.b_list, 
            building.b_type, 
            building.p_type, 
            building.p_no, 
            building.u_price, 
            building.unit_no, 
            building.b_binding1, 
            building.b_binding2, 
            building.b_binding3, 
            building.t_budget, 
            building.b_locate, 
            building.amphur, 
            building.tumbon, 
            building.hos_lev, 
            building.t_build, 
            building.reason, 
            building.l_time, 
            building.pop, 
            building.opd_visit, 
            building.active_bed, 
            building.SUM_AdjRw, 
            building.EC, 
            building.ES, 
            building.PCC, 
            building.Famine, 
            building.new_b, 
            building.personels, 
            building.d_update
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
