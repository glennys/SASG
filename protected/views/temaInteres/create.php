<?php
/* @var $this TemaInteresController */
/* @var $model TemaInteres */

$this->breadcrumbs=array(
	'Tema de Interes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Tema de Interes', 'url'=>array('index')),
	array('label'=>'Administrar Tema de Interes', 'url'=>array('admin')),
);
?>

<h1>Crear Tema de Interes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>