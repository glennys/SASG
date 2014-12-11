<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TipoAuditoria', 'url'=>array('index')),
	array('label'=>'Administrar TipoAuditoria', 'url'=>array('admin')),
);
?>

<h1>Create TipoAuditoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>