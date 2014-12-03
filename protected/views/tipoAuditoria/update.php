<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	$model->id_tipo_auditoria=>array('view','id'=>$model->id_tipo_auditoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoAuditoria', 'url'=>array('index')),
	array('label'=>'Create TipoAuditoria', 'url'=>array('create')),
	array('label'=>'View TipoAuditoria', 'url'=>array('view', 'id'=>$model->id_tipo_auditoria)),
	array('label'=>'Manage TipoAuditoria', 'url'=>array('admin')),
);
?>

<h1>Update TipoAuditoria <?php echo $model->id_tipo_auditoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>