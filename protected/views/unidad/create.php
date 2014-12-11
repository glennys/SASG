<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidads'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Unidad', 'url'=>array('index')),
	array('label'=>'Administrar Unidad', 'url'=>array('admin')),
);
?>

<h1>Crear Unidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>