<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LideresObservacions'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List LideresObservacion', 'url'=>array('index')),
	array('label'=>'Create LideresObservacion', 'url'=>array('create')),
	array('label'=>'Update LideresObservacion', 'url'=>array('update', 'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad)),
	array('label'=>'Delete LideresObservacion', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LideresObservacion', 'url'=>array('admin')),
);
?>

<h1>View LideresObservacion</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observacion',
		'id_unidad',
		'id_empleado_supervisor',
		'aprobacion',
		'fecha_asignacion',
	),
)); ?>
