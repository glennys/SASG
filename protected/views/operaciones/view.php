<?php
/* @var $this OperacionesController */
/* @var $model Operaciones */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	$model->id_operaciones,
);

$this->menu=array(
	array('label'=>'Listar Operaciones', 'url'=>array('index')),
	array('label'=>'Crear Operaciones', 'url'=>array('create')),
	array('label'=>'Modificar Operaciones', 'url'=>array('update', 'id'=>$model->id_operaciones)),
	array('label'=>'Eliminar Operaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_operaciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Operaciones', 'url'=>array('admin')),
);
?>

<h1>View Operaciones #<?php echo $model->id_operaciones; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_operaciones',
		'descripcion',
		'activo',
		
	),
)); ?>
