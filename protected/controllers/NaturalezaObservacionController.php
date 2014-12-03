
<?php
class NaturalezaObservacionController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('NaturalezaObservacion');
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
	    $model=new NaturalezaObservacion;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['NaturalezaObservacion']))
	    {
	        $model->attributes=$_POST['NaturalezaObservacion'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','id_naturaleza'=>$model->id_naturaleza, 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad)->delete();
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
	
	public function actionUpdate($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad)
	{
		$model=$this->loadModel($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NaturalezaObservacion']))
		{
			$model->attributes=$_POST['NaturalezaObservacion'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'id_naturaleza'=>$model->id_naturaleza, 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new NaturalezaObservacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NaturalezaObservacion']))
			$model->attributes=$_GET['NaturalezaObservacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad)
	{		
		$model=$this->loadModel($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($id_naturaleza, $id_observaciones, $id_unidad, $fecha_observacion, $id_actividad)
	{
		$model=NaturalezaObservacion::model()->findByPk(array('id_naturaleza'=>$id_naturaleza, 'id_observaciones'=>$id_observaciones, 'id_unidad'=>$id_unidad, 'fecha_observacion'=>$fecha_observacion, 'id_actividad'=>$id_actividad));
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
