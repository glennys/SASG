<?php
/* @var $this ProcesosController */
/* @var $model Procesos */

$this->breadcrumbs=array(
	'Procesoses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Procesos', 'url'=>array('index')),
	array('label'=>'Administrar Procesos', 'url'=>array('admin')),
);
?>

<h1>Create Procesos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>