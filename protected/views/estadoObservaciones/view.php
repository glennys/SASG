<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Observacioness'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Estado Observaciones', 'url'=>array('index')),
	array('label'=>'Crear Estado Observaciones', 'url'=>array('create')),
	array('label'=>'Modificar Estado Observaciones', 'url'=>array('update', 'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Eliminar Estado Observaciones', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoObservaciones', 'url'=>array('admin')),
);
?>

<h1>Vista Estado Observaciones</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proceso',
		'id_observaciones',
		'id_estado',
		'fecha_asignacion',
	),
)); ?>
