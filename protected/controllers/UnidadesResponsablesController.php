
<?php
class UnidadesResponsablesController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('UnidadesResponsables');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new UnidadesResponsables;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['UnidadesResponsables']))
	    {
	        $model->attributes=$_POST['UnidadesResponsables'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($id_unidad, $id_observaciones)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($id_unidad, $id_observaciones)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($id_unidad, $id_observaciones)
	{
		$model=$this->loadModel($id_unidad, $id_observaciones);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UnidadesResponsables']))
		{
			$model->attributes=$_POST['UnidadesResponsables'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new UnidadesResponsables('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UnidadesResponsables']))
			$model->attributes=$_GET['UnidadesResponsables'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id_unidad, $id_observaciones)
	{		
		$model=$this->loadModel($id_unidad, $id_observaciones);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($id_unidad, $id_observaciones)
	{
		$model=UnidadesResponsables::model()->findByPk(array('id_unidad'=>$id_unidad, 'id_observaciones'=>$id_observaciones));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		

	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
                        array('CrugeAccessControlFilter'),
		);
	}
}
