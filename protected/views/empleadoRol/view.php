<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol empleado'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Rol empleado', 'url'=>array('index')),
	array('label'=>'Crear Rol empleado', 'url'=>array('create')),
	array('label'=>'Modificar Rol empleado', 'url'=>array('update', 'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol)),
	array('label'=>'Eliminar Rol empleado', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol),
									'confirm'=>'Esta seguro de borrar este campo?')),
	array('label'=>'Administrar EmpleadoRol', 'url'=>array('admin')),
);
?>

<h1>Vista Rol empleado</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol',
		'id_empleado',
	),
)); ?>
