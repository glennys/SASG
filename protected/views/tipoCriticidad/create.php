<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Tipo Criticidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoCriticidad', 'url'=>array('index')),
	array('label'=>'Manage TipoCriticidad', 'url'=>array('admin')),
);
?>

<h1>Create TipoCriticidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>