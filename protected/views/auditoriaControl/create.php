<?php
/* @var $this AuditoriaControlController */
/* @var $model AuditoriaControl */

$this->breadcrumbs=array(
	'Auditoria Controls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AuditoriaControl', 'url'=>array('index')),
	array('label'=>'Manage AuditoriaControl', 'url'=>array('admin')),
);
?>

<h1>Create AuditoriaControl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>