<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->id_permisos,
);

$this->menu=array(
	array('label'=>'List Modulo', 'url'=>array('index')),
	array('label'=>'Create Modulo', 'url'=>array('create')),
	array('label'=>'Update Modulo', 'url'=>array('update', 'id'=>$model->id_permisos)),
	array('label'=>'Delete Modulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_permisos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modulo', 'url'=>array('admin')),
);
?>

<h1>View Modulo #<?php echo $model->id_permisos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_permisos',
		'nombre_modulo',
		'tipo',
		'parent_id_permisos',
		/*'fecha_creacion',
		'fecha_actualizacion',
		'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',*/
	),
)); ?>
