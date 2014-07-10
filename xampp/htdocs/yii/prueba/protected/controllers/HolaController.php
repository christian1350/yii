<?php
#http://localhost/yii/prueba/hola/index
class HolaController extends Controller
{
	public function actionIndex()

	{
		$model=CActiveRecord::model("Users")->findAll();
		$twitter="@_cmagallon";
		$this->render("index", array("model"=>$model,"twitter"=>$twitter));
	}
}