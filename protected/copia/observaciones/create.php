<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */

$this->breadcrumbs=array(
	'Observaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Observaciones', 'url'=>array('index')),
	array('label'=>'Manage Observaciones', 'url'=>array('admin')),
);
?>

<h1>Create Observaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>