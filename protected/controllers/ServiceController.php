<?php

class ServiceController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			//'ajaxOnly + price2',
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','price','price2','price3','field'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Service;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Service']))
		{
			$model->attributes=$_POST['Service'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Service']))
		{
			$model->attributes=$_POST['Service'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Service');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Service('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Service']))
			$model->attributes=$_GET['Service'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	/*
	public function actionPrice() {
	
		$model = new ServiceSelectForm;
		if(isset($_POST['ServiceSelectForm']))
				{
					$model->attributes=$_POST['ServiceSelectForm'];
					if($model->validate())
					{
						$this->redirect(array('price2','id'=>$model->level, 'pid'=>$model->service));
					}
				}
			
				
		$this->render('price', array('model'=>$model));
	}
	*/
	
	public function actionPrice() {
	
		$model = new ServiceSelectForm;
		
		$this->performAjaxValidation($model);
		
		if(isset($_POST['ServiceSelectForm']))
				{
					$model->attributes=$_POST['ServiceSelectForm'];
					if($model->validate())
					{
						Yii::app()->session->add('ServiceSelectForm',$model);
						$this->redirect(array('price2'));
					}
				}
			
				
		$this->render('price', array('model'=>$model));
	}

	/*
	public function actionPrice() {
			
		$models = array();
	
		if(!empty($_POST['ServiceSelectForm']))
		{
			foreach($_POST['ServiceSelectForm'] as $serviceData)
			{
				$model = new ServiceSelectForm();
				$model->setAttributes($serviceData);
				if($model->validate())
					$models[] = $model;
			}
		}
	
		if(!empty($models)){
				Yii::app()->session->add('ServiceSelectForm',$model);
				$this->redirect(array('price2'));
		}
		else
			$models[] = new ServiceSelectForm();
	
		$this->render('price', array(
			'models' => $models,
		));
	}
	
	public function actionField($index)
	{
		$model = new ServiceSelectForm();
		$this->renderPartial('_service', array(
			'model' => $model,
			'index' => $index,
		));
	}
	
	*/
	
	
	public function actionPrice2() 
	{
		
		$model=Yii::app()->session->get('ServiceSelectForm');
		
		$service1 = Service::model()->find('id=:id', array(':id'=>$model->service1));
		$service2 = Service::model()->find('id=:id', array(':id'=>$model->service2));
		$service3 = Service::model()->find('id=:id', array(':id'=>$model->service3));
		$treatment = Service::model()->find('id=:id', array(':id'=>$model->treatment));
		$role = StaffRole::model()->find('id=:id', array(':id'=>$model->level)); 				
		$price1 = Service::model()->getCalculatedPrice($service1->time,$role->cpm,$service1->offset);
		$price2 = Service::model()->getCalculatedPrice($service2->time,$role->cpm,$service2->offset);
		$price3 = Service::model()->getCalculatedPrice($service3->time,$role->cpm,$service3->offset);
		$price4 = Service::model()->getCalculatedPrice($treatment->time,$role->cpm,$treatment->offset);
			
		$data = $price1 + $price2 + $price3 + $price4;
			
		$this->render('_price2',array('data'=>$data, 'role'=>$role, 'service1'=>$service1, 'service2'=>$service2, 'service3'=>$service3, 'treatment'=>$treatment));
	}

	
	
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Service::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='service-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
