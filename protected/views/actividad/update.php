<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividad=>array('view','id'=>$model->id_actividad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Actividad', 'url'=>array('index')),
	array('label'=>'Crear Actividad', 'url'=>array('create')),
	array('label'=>'Vista Actividad', 'url'=>array('view', 'id'=>$model->id_actividad)),
	array('label'=>'Administrar Actividad', 'url'=>array('admin')),
);
?>

<h1>Modificar Actividad <?php echo $model->id_actividad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>