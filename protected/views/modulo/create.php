<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Modulo', 'url'=>array('index')),
	array('label'=>'Manage Modulo', 'url'=>array('admin')),
);
?>

<h1>Create Modulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>