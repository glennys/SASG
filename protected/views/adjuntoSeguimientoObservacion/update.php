<?php
/* @var $this AdjuntoSeguimientoObservacionController */
/* @var $model AdjuntoSeguimientoObservacion */

$this->breadcrumbs=array(
	'Adjunto Seguimiento Observacions'=>array('index'),
	$model->id_adjunto_seguimiento_observacion=>array('view','id'=>$model->id_adjunto_seguimiento_observacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdjuntoSeguimientoObservacion', 'url'=>array('index')),
	array('label'=>'Create AdjuntoSeguimientoObservacion', 'url'=>array('create')),
	array('label'=>'View AdjuntoSeguimientoObservacion', 'url'=>array('view', 'id'=>$model->id_adjunto_seguimiento_observacion)),
	array('label'=>'Manage AdjuntoSeguimientoObservacion', 'url'=>array('admin')),
);
?>

<h1>Update AdjuntoSeguimientoObservacion <?php echo $model->id_adjunto_seguimiento_observacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>