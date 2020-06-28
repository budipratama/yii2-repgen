<?php
namespace budipratama\repgen\controllers;
use yii\web\Controller;
class ReportGeneratorController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}