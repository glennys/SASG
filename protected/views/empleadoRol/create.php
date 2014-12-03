<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol empleadoRol empleado'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Rol empleado', 'url'=>array('index')),
    array('label'=>'Administrar Rol empleado', 'url'=>array('admin')),
);
?>

<h1>Crear Rol empleado</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
