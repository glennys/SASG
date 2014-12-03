<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Estados', 'url'=>array('index')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Crear Estado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>