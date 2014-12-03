<?php
/* @var $this OperacionesController */
/* @var $model Operaciones */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	$model->id_operaciones,
);

$this->menu=array(
	array('label'=>'List Operaciones', 'url'=>array('index')),
	array('label'=>'Create Operaciones', 'url'=>array('create')),
	array('label'=>'Update Operaciones', 'url'=>array('update', 'id'=>$model->id_operaciones)),
	array('label'=>'Delete Operaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_operaciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Operaciones', 'url'=>array('admin')),
);
?>

<h1>View Operaciones #<?php echo $model->id_operaciones; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_operaciones',
		'descripcion',
		'activo',
		//'fecha_creacion',
		//'fecha_actualizacion',
	),
)); ?>
