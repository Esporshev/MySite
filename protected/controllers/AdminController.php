<?php

class AdminController extends Controller
{
    public function actionIndex()
	{
		$this->render('index');
	}
	
    public function actionPage_Create()
      {
          $model = new Pages;
          $root = Pages::model()->;
          if(!empty($_POST['Pages']))
          {
              $model->attributes=$_POST['Pages'];
              $model->insertAfter($root);
          }
          $this->render('pagesCreate', array('model'=>$model));
      } 
      
    public function actionView()
    {
        $model = new Pages;
        $model = Pages::model()->findAll(array('order'=>'lft'));
        $this->render('view', array('model'=>$model));
    }
    
    public function actionPCreate()
    {
        $model = new Price;
        if(!empty($_POST['Price']))
        {
            $model->attributes=$_POST['Price'];
            $model->save();
        }
        $this->render('priceListCreate', array('model'=>$model));
    }
    
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}