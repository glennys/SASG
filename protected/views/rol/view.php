<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->id_rol,
);

$this->menu=array(
	array('label'=>'Listar Rol', 'url'=>array('index')),
	array('label'=>'Crear Rol', 'url'=>array('create')),
	array('label'=>'modificar Rol', 'url'=>array('update', 'id'=>$model->id_rol)),
	array('label'=>'eliminar Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rol),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Rol', 'url'=>array('admin')),
);
?>

<h1>Vista Rol #<?php echo $model->id_rol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol',
		'parent_id_rol',
		'descripcion',
		'activo',
	),
)); ?>
