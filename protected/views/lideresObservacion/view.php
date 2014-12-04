Lideres Observación<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lideres Observación'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Lideres Observación', 'url'=>array('index')),
	array('label'=>'Crear Lideres Observación', 'url'=>array('create')),
	array('label'=>'Modificar Lideres Observación', 'url'=>array('update', 'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad)),
	array('label'=>'Eliminar Lideres Observación', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LideresObservacion', 'url'=>array('admin')),
);
?>

<h1>Vista Lideres Observación</h1>

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
