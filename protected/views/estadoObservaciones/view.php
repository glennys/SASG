<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoObservacioness'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List EstadoObservaciones', 'url'=>array('index')),
	array('label'=>'Create EstadoObservaciones', 'url'=>array('create')),
	array('label'=>'Update EstadoObservaciones', 'url'=>array('update', 'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Delete EstadoObservaciones', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoObservaciones', 'url'=>array('admin')),
);
?>

<h1>View EstadoObservaciones</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proceso',
		'id_observaciones',
		'id_estado',
		'fecha_asignacion',
	),
)); ?>
