<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoAuditoria', 'url'=>array('index')),
	array('label'=>'Manage TipoAuditoria', 'url'=>array('admin')),
);
?>

<h1>Create TipoAuditoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>