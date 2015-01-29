
<?php
class ObservacionesAuditorController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ObservacionesAuditor');
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
	    $model=new ObservacionesAuditor;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['ObservacionesAuditor']))
	    {
	        $model->attributes=$_POST['ObservacionesAuditor'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','observaciones'=>$model->observaciones, 'id_auditor'=>$model->id_auditor, 'fecha_asignacion'=>$model->fecha_asignacion));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($observaciones, $id_auditor, $fecha_asignacion)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($observaciones, $id_auditor, $fecha_asignacion)->delete();
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
	
	public function actionUpdate($observaciones, $id_auditor, $fecha_asignacion)
	{
		$model=$this->loadModel($observaciones, $id_auditor, $fecha_asignacion);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ObservacionesAuditor']))
		{
			$model->attributes=$_POST['ObservacionesAuditor'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'observaciones'=>$model->observaciones, 'id_auditor'=>$model->id_auditor, 'fecha_asignacion'=>$model->fecha_asignacion));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new ObservacionesAuditor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ObservacionesAuditor']))
			$model->attributes=$_GET['ObservacionesAuditor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($observaciones, $id_auditor, $fecha_asignacion)
	{		
		$model=$this->loadModel($observaciones, $id_auditor, $fecha_asignacion);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($observaciones, $id_auditor, $fecha_asignacion)
	{
		$model=ObservacionesAuditor::model()->findByPk(array('observaciones'=>$observaciones, 'id_auditor'=>$id_auditor, 'fecha_asignacion'=>$fecha_asignacion));
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
