<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Informe', 'url'=>array('index')),
	array('label'=>'Administrar Informe', 'url'=>array('admin')),
);
?>

<h1>Crear Informe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>