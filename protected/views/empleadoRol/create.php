<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'empleadoRol'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpleadoRol', 'url'=>array('index')),
    array('label'=>'Manage EmpleadoRol', 'url'=>array('admin')),
);
?>

<h1>Crear Empleado</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
