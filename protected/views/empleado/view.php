<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id_empleado,
);

$this->menu=array(
	array('label'=>'Listar Empleado', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Modificar Empleado', 'url'=>array('update', 'id'=>$model->id_empleado)),
	array('label'=>'Eliminar Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_empleado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Vista Empleado #<?php echo $model->id_empleado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_empleado',
		'id_unidad',
		'primerapellido_empleado',
		'segundoapellido_empleado',
		'nombrecompleto_empleado',
		'email_empleado',
		'password_empleado',
		'perfilsap_empleado',
		'coord_gcia_empleado',
		'extension_empleado',
		'celular_empleado',
		'nombre_empleado',
		'cedula_empleado',
		'supervisor_empleado',
		'poo',
		
	),
)); ?>
