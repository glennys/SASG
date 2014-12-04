<?php
/* @var $this ImpactoController */
/* @var $model Impacto */

$this->breadcrumbs=array(
	'Impactos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Impacto', 'url'=>array('index')),
	array('label'=>'Administrar Impacto', 'url'=>array('admin')),
);
?>

<h1>Crear Impacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>