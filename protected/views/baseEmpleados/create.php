<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Empleado</h1>

<!--aca se esta haciendi el llamado a la vista: "_form"-->
<?php $this->renderPartial('_form', array('model'=>$model)); ?>