<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Historial Lider'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Historial Lider', 'url'=>array('index')),
	array('label'=>'Crear Historial Lider', 'url'=>array('create')),
	array('label'=>'Modificar Historial Lider', 'url'=>array('update', 'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Eliminar Historial Lider', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiderObservacionHistorial', 'url'=>array('admin')),
);
?>

<h1>Vista Historial Lider</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observacion',
		'id_supervisor',
		'fecha_asignacion',
		'otro',
	),
)); ?>
