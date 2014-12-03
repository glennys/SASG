
<?php
class ModuloOperacionesController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ModuloOperaciones');
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
	    $model=new ModuloOperaciones;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['ModuloOperaciones']))
	    {
	        $model->attributes=$_POST['ModuloOperaciones'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($id_operaciones, $id_permisos)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($id_operaciones, $id_permisos)->delete();
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
	
	public function actionUpdate($id_operaciones, $id_permisos)
	{
		$model=$this->loadModel($id_operaciones, $id_permisos);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ModuloOperaciones']))
		{
			$model->attributes=$_POST['ModuloOperaciones'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new ModuloOperaciones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ModuloOperaciones']))
			$model->attributes=$_GET['ModuloOperaciones'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id_operaciones, $id_permisos)
	{		
		$model=$this->loadModel($id_operaciones, $id_permisos);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($id_operaciones, $id_permisos)
	{
		$model=ModuloOperaciones::model()->findByPk(array('id_operaciones'=>$id_operaciones, 'id_permisos'=>$id_permisos));
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
