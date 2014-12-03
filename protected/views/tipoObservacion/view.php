<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */

$this->breadcrumbs=array(
	'Tipo Observacions'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List TipoObservacion', 'url'=>array('index')),
	array('label'=>'Create TipoObservacion', 'url'=>array('create')),
	array('label'=>'Update TipoObservacion', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete TipoObservacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoObservacion', 'url'=>array('admin')),
);
?>

<h1>View TipoObservacion #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'descripcion',
		'activo',
		//'fecha_creacion',
		//'fecha_actualizacion',
	),
)); ?>
