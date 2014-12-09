<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	$model->id_naturaleza,
);

$this->menu=array(
	array('label'=>'Listar Naturaleza', 'url'=>array('index')),
	array('label'=>'Crear Naturaleza', 'url'=>array('create')),
	array('label'=>'Modificar Naturaleza', 'url'=>array('update', 'id'=>$model->id_naturaleza)),
	array('label'=>'Eliminar Naturaleza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_naturaleza),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Naturaleza', 'url'=>array('admin')),
);
?>

<h1>Vista Naturaleza #<?php echo $model->id_naturaleza; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_naturaleza',
		'parent_id_naturaleza',
		'descripcion',
		'activo',
		'tipo',
		
	),
)); ?>
