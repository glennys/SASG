<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidadConsultors'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidadConsultor', 'url'=>array('index')),
	array('label'=>'Create ObservacionesUnidadConsultor', 'url'=>array('create')),
	array('label'=>'Update ObservacionesUnidadConsultor', 'url'=>array('update', 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Delete ObservacionesUnidadConsultor', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesUnidadConsultor', 'url'=>array('admin')),
);
?>

<h1>View ObservacionesUnidadConsultor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observaciones',
		'id_unidad',
		'fecha_observacion',
		'id_actividad',
		'fecha_seguimiento',
		'propietario',
		'id_empleado',
		'id_estado',
		'avance',
	),
)); ?>
