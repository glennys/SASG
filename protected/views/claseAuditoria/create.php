<?php
/* @var $this ClaseAuditoriaController */
/* @var $model ClaseAuditoria */

$this->breadcrumbs=array(
	'Clase Auditorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClaseAuditoria', 'url'=>array('index')),
	array('label'=>'Manage ClaseAuditoria', 'url'=>array('admin')),
);
?>

<h1>Create ClaseAuditoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>