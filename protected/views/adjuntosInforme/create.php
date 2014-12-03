<?php
/* @var $this AdjuntosInformeController */
/* @var $model AdjuntosInforme */

$this->breadcrumbs=array(
	'Adjuntos Informes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdjuntosInforme', 'url'=>array('index')),
	array('label'=>'Manage AdjuntosInforme', 'url'=>array('admin')),
);
?>

<h1>Create AdjuntosInforme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>