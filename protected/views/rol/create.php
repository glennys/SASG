<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rol', 'url'=>array('index')),
	array('label'=>'Manage Rol', 'url'=>array('admin')),
);
?>

<h1>Create Rol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>