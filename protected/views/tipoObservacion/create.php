<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */

$this->breadcrumbs=array(
	'Tipo Observacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoObservacion', 'url'=>array('index')),
	array('label'=>'Manage TipoObservacion', 'url'=>array('admin')),
);
?>

<h1>Create TipoObservacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>