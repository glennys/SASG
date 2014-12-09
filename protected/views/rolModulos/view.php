<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol Moduloss'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'Listar Rol Modulos', 'url'=>array('index')),
	array('label'=>'Crear Rol Modulos', 'url'=>array('create')),
	array('label'=>'Modificar Rol Modulos', 'url'=>array('update', 'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol)),
	array('label'=>'Eliminar Rol Modulos', 'url'=>'delete', 
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
