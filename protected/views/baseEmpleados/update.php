<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->nu_docm_idnt=>array('view','id'=>$model->nu_docm_idnt),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->nu_docm_idnt)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empleado <?php echo $model->nu_docm_idnt; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>