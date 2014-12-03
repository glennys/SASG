<?php
/* @var $this ImpactoController */
/* @var $model Impacto */

$this->breadcrumbs=array(
	'Impactos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Impacto', 'url'=>array('index')),
	array('label'=>'Manage Impacto', 'url'=>array('admin')),
);
?>

<h1>Create Impacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>