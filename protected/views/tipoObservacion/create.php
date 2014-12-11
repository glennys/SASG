<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */

$this->breadcrumbs=array(
	'Tipo Observaciones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipo Observación', 'url'=>array('index')),
	array('label'=>'Administrar Tipo Observación', 'url'=>array('admin')),
);
?>

<h1>Create TipoObservacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>