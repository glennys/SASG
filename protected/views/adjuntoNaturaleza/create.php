<?php
/* @var $this AdjuntoNaturalezaController */
/* @var $model AdjuntoNaturaleza */

$this->breadcrumbs=array(
	'Adjunto Naturalezas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdjuntoNaturaleza', 'url'=>array('index')),
	array('label'=>'Manage AdjuntoNaturaleza', 'url'=>array('admin')),
);
?>

<h1>Create AdjuntoNaturaleza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>