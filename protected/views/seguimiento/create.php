<?php
/* @var $this SeguimientoController */
/* @var $model Seguimiento */

$this->breadcrumbs=array(
	'Seguimientos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Seguimiento', 'url'=>array('index')),
	array('label'=>'Administrar Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Crear Seguimiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>