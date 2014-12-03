<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EmpleadoRol'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List EmpleadoRol', 'url'=>array('index')),
	array('label'=>'Create EmpleadoRol', 'url'=>array('create')),
	array('label'=>'Update EmpleadoRol', 'url'=>array('update', 'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol)),
	array('label'=>'Delete EmpleadoRol', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol),
									'confirm'=>'Esta seguro de borrar este campo?')),
	array('label'=>'Manage EmpleadoRol', 'url'=>array('admin')),
);
?>

<h1>View EmpleadoRol</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol',
		'id_empleado',
	),
)); ?>
