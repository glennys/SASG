<?php
/* @var $this OperacionesController */
/* @var $model Operaciones */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Operaciones', 'url'=>array('index')),
	array('label'=>'Administrar Operaciones', 'url'=>array('admin')),
);
?>

<h1>Crear Operaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>