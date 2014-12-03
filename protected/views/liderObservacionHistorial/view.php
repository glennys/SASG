<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LiderObservacionHistorials'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List LiderObservacionHistorial', 'url'=>array('index')),
	array('label'=>'Create LiderObservacionHistorial', 'url'=>array('create')),
	array('label'=>'Update LiderObservacionHistorial', 'url'=>array('update', 'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Delete LiderObservacionHistorial', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiderObservacionHistorial', 'url'=>array('admin')),
);
?>

<h1>View LiderObservacionHistorial</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observacion',
		'id_supervisor',
		'fecha_asignacion',
		'otro',
	),
)); ?>
