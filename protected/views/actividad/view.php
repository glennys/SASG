<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividad,
);

$this->menu=array(
	array('label'=>'Listar Actividad', 'url'=>array('index')),
	array('label'=>'Crear Actividad', 'url'=>array('create')),
	array('label'=>'Modificar Actividad', 'url'=>array('update', 'id'=>$model->id_actividad)),
	array('label'=>'Eliminar Actividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_actividad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Actividad', 'url'=>array('admin')),
);
?>

<h1>Vista de la  Actividad #<?php echo $model->id_actividad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_actividad',
		'id_observaciones',
		'id_unidad',
		'descripcion',
		'nombre_actividad',
		'fecha_fin',
		'fecha_inicio',
		'cerrada',
	),
)); ?>
