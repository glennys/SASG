<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolModuloss'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List RolModulos', 'url'=>array('index')),
	array('label'=>'Create RolModulos', 'url'=>array('create')),
	array('label'=>'Update RolModulos', 'url'=>array('update', 'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol)),
	array('label'=>'Delete RolModulos', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol),
									'confirm'=>'Esta seguro de borrar este campo?')),
	array('label'=>'Manage RolModulos', 'url'=>array('admin')),
);
?>

<h1>View RolModulos</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol',
		'id_permisos',
	),
)); ?>
