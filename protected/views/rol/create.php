<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Rol', 'url'=>array('index')),
	array('label'=>'Administrar Rol', 'url'=>array('admin')),
);
?>

<h1>Crear Rol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>