<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Actividad', 'url'=>array('index')),
	array('label'=>'Administrar Actividad', 'url'=>array('admin')),
);
?>

<h1>Crear Actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>