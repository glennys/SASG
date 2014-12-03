<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidad'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidad', 'url'=>array('index')),
	array('label'=>'Create ObservacionesUnidad', 'url'=>array('create')),
	array('label'=>'Update ObservacionesUnidad', 'url'=>array('update', 'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades)),
	array('label'=>'Delete ObservacionesUnidad', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesUnidad', 'url'=>array('admin')),
);
?>

<h1>View ObservacionesUnidad</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observaciones',
		'id_unidades',
		'id_empleado_consultor',
		'plan_general',
		'id_estado',
		'fecha_asignacion',
	),
)); ?>
