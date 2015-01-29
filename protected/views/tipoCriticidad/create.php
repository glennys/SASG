<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Criticidads'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Criticidad', 'url'=>array('index')),
	array('label'=>'Administrar Criticidad', 'url'=>array('admin')),
);
?>

<h1>Create Criticidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>