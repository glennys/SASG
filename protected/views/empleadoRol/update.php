<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EmpleadoRol'=>array('index'),
	'View'=>array('view', 'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpleadoRol', 'url'=>array('index')),
	array('label'=>'Create EmpleadoRol', 'url'=>array('create')),
	array('label'=>'View EmpleadoRol', 'url'=>array('view', 'id_empleado'=>$model->id_empleado, 'id_rol'=>$model->id_rol)),
	array('label'=>'Manage EmpleadoRol', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
