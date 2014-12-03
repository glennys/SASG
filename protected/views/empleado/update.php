<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id_empleado=>array('view','id'=>$model->id_empleado),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Empleado', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Vista Empleado', 'url'=>array('view', 'id'=>$model->id_empleado)),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Modificar Empleado <?php echo $model->id_empleado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>