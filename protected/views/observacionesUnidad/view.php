<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Unidad'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Observaciones Unidad', 'url'=>array('index')),
	array('label'=>'Crear Observaciones Unidad', 'url'=>array('create')),
	array('label'=>'Modificar Observaciones Unidad', 'url'=>array('update', 'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades)),
	array('label'=>'Eliminar Observaciones Unidad', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesUnidad', 'url'=>array('admin')),
);
?>

<h1>Vista Observaciones Unidad</h1>

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
