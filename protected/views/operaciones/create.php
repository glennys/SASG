<?php
/* @var $this OperacionesController */
/* @var $model Operaciones */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Operaciones', 'url'=>array('index')),
	array('label'=>'Manage Operaciones', 'url'=>array('admin')),
);
?>

<h1>Create Operaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>