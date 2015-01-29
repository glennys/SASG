<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Criticidad'=>array('index'),
	$model->id_tipo_criticidad,
);

$this->menu=array(
	array('label'=>'Listar Criticidad', 'url'=>array('index')),
	array('label'=>'Crear Criticidad', 'url'=>array('create')),
	array('label'=>'Modificar Criticidad', 'url'=>array('update', 'id'=>$model->id_tipo_criticidad)),
	array('label'=>'Eliminar Criticidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_criticidad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Criticidad', 'url'=>array('admin')),
);
?>

<h1>View Criticidad #<?php echo $model->id_tipo_criticidad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_criticidad',
		'descripcion',
		
	),
)); ?>
