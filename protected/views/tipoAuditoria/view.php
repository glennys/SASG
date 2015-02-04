<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	$model->id_tipo_auditoria,
);

$this->menu=array(
	array('label'=>'Listar Tipo Auditoria', 'url'=>array('index')),
	array('label'=>'Crear Tipo Auditoria', 'url'=>array('create')),
	array('label'=>'Modificar Tipo Auditoria', 'url'=>array('update', 'id'=>$model->id_tipo_auditoria)),
	array('label'=>'Eliminar Tipo Auditoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_auditoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipo Auditoria', 'url'=>array('admin')),
);
?>

<h1>View TipoAuditoria #<?php echo $model->id_tipo_auditoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_auditoria',
		'descripcion',
		'abreviatura_tipo_auditoria',
		),
)); ?>
