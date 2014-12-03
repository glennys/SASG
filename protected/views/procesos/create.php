<?php
/* @var $this ProcesosController */
/* @var $model Procesos */

$this->breadcrumbs=array(
	'Procesoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Procesos', 'url'=>array('index')),
	array('label'=>'Manage Procesos', 'url'=>array('admin')),
);
?>

<h1>Create Procesos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>