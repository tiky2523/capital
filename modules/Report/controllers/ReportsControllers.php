<?php
namespace app\modules\Report\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;
use Yii;

class ReportController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
       
    public function actionReportb ($amp=null){
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
            FROM building WHERE building.amphur=$amp";
    try{
          $rawData= \yii::$app->db->createCommand($sql)->queryAll();
      }  catch(\yii\dbException $e){
          throw new \yii\web\ConflictHttpException('sql error');
      }
      $dataProvider=new \yii\data\ArrayDataProvider([
          'allModels'=>$rawData,
          'pagination'=>FALSE,
      ]);
      return $this->render('reportbuild',[
          'dataProvider'=>$dataProvider,
          'rawData'=>$rawdData,
          'sql'=>$sql,
          'amphur'=>$amp
      ]);
    }

}
