<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	$model->id_naturaleza,
);

$this->menu=array(
	array('label'=>'List Naturaleza', 'url'=>array('index')),
	array('label'=>'Create Naturaleza', 'url'=>array('create')),
	array('label'=>'Update Naturaleza', 'url'=>array('update', 'id'=>$model->id_naturaleza)),
	array('label'=>'Delete Naturaleza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_naturaleza),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Naturaleza', 'url'=>array('admin')),
);
?>

<h1>View Naturaleza #<?php echo $model->id_naturaleza; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_naturaleza',
		'parent_id_naturaleza',
		'descripcion',
		'activo',
		'tipo',
		//'fecha_creacion',
		//'fecha_actualizacion',
	),
)); ?>
