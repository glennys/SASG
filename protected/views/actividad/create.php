<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Actividad', 'url'=>array('index')),
	array('label'=>'Manage Actividad', 'url'=>array('admin')),
);
?>

<h1>Create Actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>