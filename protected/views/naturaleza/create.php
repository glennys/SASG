<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Naturaleza', 'url'=>array('index')),
	array('label'=>'Administrar Naturaleza', 'url'=>array('admin')),
);
?>

<h1>Crear Naturaleza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>