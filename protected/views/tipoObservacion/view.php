<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */

$this->breadcrumbs=array(
	'Tipo Observacions'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'Listar Tipo Observación', 'url'=>array('index')),
	array('label'=>'Crear Tipo Observación', 'url'=>array('create')),
	array('label'=>'Modificar Tipo Observación', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Eliminar Tipo Observación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipo Observación', 'url'=>array('admin')),
);
?>

<h1>View Tipo Observación #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'descripcion',
		'activo',
	),
)); ?>
