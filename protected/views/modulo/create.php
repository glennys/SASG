<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Módulos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Módulos', 'url'=>array('index')),
	array('label'=>'Administrar Módulo', 'url'=>array('admin')),
);
?>

<h1>Crear Módulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>