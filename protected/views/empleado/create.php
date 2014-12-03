<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Crear Empleados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>