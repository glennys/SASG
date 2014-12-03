<?php
/* @var $this AdjuntoSeguimientoObservacionController */
/* @var $model AdjuntoSeguimientoObservacion */

$this->breadcrumbs=array(
	'Adjunto Seguimiento Observacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdjuntoSeguimientoObservacion', 'url'=>array('index')),
	array('label'=>'Manage AdjuntoSeguimientoObservacion', 'url'=>array('admin')),
);
?>

<h1>Create AdjuntoSeguimientoObservacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>