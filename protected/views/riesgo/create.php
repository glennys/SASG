<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */

$this->breadcrumbs=array(
	'Riesgo'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Riesgo', 'url'=>array('index')),
	array('label'=>'Administrar Riesgo', 'url'=>array('admin')),
);
?>

<h1>Crear Riesgo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>