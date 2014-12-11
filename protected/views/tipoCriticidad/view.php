<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Tipo Criticidads'=>array('index'),
	$model->id_tipo_criticidad,
);

$this->menu=array(
	array('label'=>'Listar TipoCriticidad', 'url'=>array('index')),
	array('label'=>'Crear TipoCriticidad', 'url'=>array('create')),
	array('label'=>'Modificar TipoCriticidad', 'url'=>array('update', 'id'=>$model->id_tipo_criticidad)),
	array('label'=>'Eliminar TipoCriticidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_criticidad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar TipoCriticidad', 'url'=>array('admin')),
);
?>

<h1>View TipoCriticidad #<?php echo $model->id_tipo_criticidad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_criticidad',
		'descripcion',
		'activo',
	),
)); ?>
