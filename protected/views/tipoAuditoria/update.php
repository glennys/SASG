<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	$model->id_tipo_auditoria=>array('view','id'=>$model->id_tipo_auditoria),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar TipoAuditoria', 'url'=>array('index')),
	array('label'=>'Crear TipoAuditoria', 'url'=>array('create')),
	array('label'=>'Vista TipoAuditoria', 'url'=>array('view', 'id'=>$model->id_tipo_auditoria)),
	array('label'=>'Administrar TipoAuditoria', 'url'=>array('admin')),
);
?>

<h1>Modificar TipoAuditoria <?php echo $model->id_tipo_auditoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>