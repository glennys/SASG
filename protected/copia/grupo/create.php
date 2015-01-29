<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->breadcrumbs=array(
	'Grupo'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Grupo', 'url'=>array('index')),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

<h1>Crear Grupo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>