<?php
/* @var $this AdjuntoSeguimientoObservacionController */
/* @var $model AdjuntoSeguimientoObservacion */

$this->breadcrumbs=array(
	'Adjunto Seguimiento Observacions'=>array('index'),
	$model->id_adjunto_seguimiento_observacion,
);

$this->menu=array(
	array('label'=>'List AdjuntoSeguimientoObservacion', 'url'=>array('index')),
	array('label'=>'Create AdjuntoSeguimientoObservacion', 'url'=>array('create')),
	array('label'=>'Update AdjuntoSeguimientoObservacion', 'url'=>array('update', 'id'=>$model->id_adjunto_seguimiento_observacion)),
	array('label'=>'Delete AdjuntoSeguimientoObservacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adjunto_seguimiento_observacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AdjuntoSeguimientoObservacion', 'url'=>array('admin')),
);
?>

<h1>View AdjuntoSeguimientoObservacion #<?php echo $model->id_adjunto_seguimiento_observacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adjunto_seguimiento_observacion',
		'id_observacion',
		'fecha',
		'adjunto',
		'tipo',
	),
)); ?>
