Módulos<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Módulos'=>array('index'),
	$model->id_permisos,
);

$this->menu=array(
	array('label'=>'Listar Módulos', 'url'=>array('index')),
	array('label'=>'Crear Módulo', 'url'=>array('create')),
	array('label'=>'Modificar Módulo', 'url'=>array('update', 'id'=>$model->id_permisos)),
	array('label'=>'Eliminar Módulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_permisos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Módulos', 'url'=>array('admin')),
);
?>

<h1>Vista Módulo #<?php echo $model->id_permisos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_permisos',
		'nombre_modulo',
		'tipo',
		'parent_id_permisos',
		
	),
)); ?>
