<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Naturaleza', 'url'=>array('index')),
	array('label'=>'Manage Naturaleza', 'url'=>array('admin')),
);
?>

<h1>Create Naturaleza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>