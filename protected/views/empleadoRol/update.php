<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol empleado'=>array('index'),
	'View'=>array('view', 'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Rol empleado', 'url'=>array('index')),
	array('label'=>'Crear Rol empleado', 'url'=>array('create')),
	array('label'=>'Vista Rol empleado', 'url'=>array('view', 'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol)),
	array('label'=>'Administrar Rol empleado', 'url'=>array('admin')),
); 
?>

<h1>Modificar Rol empleado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
