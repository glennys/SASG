<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Tipo Criticidads'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipo Criticidad', 'url'=>array('index')),
	array('label'=>'Administrar Tipo Criticidad', 'url'=>array('admin')),
);
?>

<h1>Create TipoCriticidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>