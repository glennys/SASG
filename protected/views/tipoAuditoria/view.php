<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	$model->id_tipo_auditoria,
);

$this->menu=array(
	array('label'=>'List TipoAuditoria', 'url'=>array('index')),
	array('label'=>'Create TipoAuditoria', 'url'=>array('create')),
	array('label'=>'Update TipoAuditoria', 'url'=>array('update', 'id'=>$model->id_tipo_auditoria)),
	array('label'=>'Delete TipoAuditoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_auditoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoAuditoria', 'url'=>array('admin')),
);
?>

<h1>View TipoAuditoria #<?php echo $model->id_tipo_auditoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_auditoria',
		'descripcion',
		'activo',
		'abreviatura_tipo_auditoria',
		//'fecha_creacion',
		//'fecha_actualizacion',
	),
)); ?>
