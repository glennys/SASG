<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Unidad', 'url'=>array('index')),
	array('label'=>'Manage Unidad', 'url'=>array('admin')),
);
?>

<h1>Create Unidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>