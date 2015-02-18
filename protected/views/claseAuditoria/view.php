<?php
/* @var $this ClaseAuditoriaController */
/* @var $model ClaseAuditoria */

$this->breadcrumbs=array(
	'Clase Auditorias'=>array('index'),
	$model->id_clase_auditoria,
);

$this->menu=array(
	array('label'=>'List ClaseAuditoria', 'url'=>array('index')),
	array('label'=>'Create ClaseAuditoria', 'url'=>array('create')),
	array('label'=>'Update ClaseAuditoria', 'url'=>array('update', 'id'=>$model->id_clase_auditoria)),
	array('label'=>'Delete ClaseAuditoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_clase_auditoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClaseAuditoria', 'url'=>array('admin')),
);
?>

<h1>View ClaseAuditoria #<?php echo $model->id_clase_auditoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_clase_auditoria',
		'descripcion',
		'abreviatura_clase_auditoria',
		'fecha_creacion',
		'fecha_actualizacion',
		'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',
	),
)); ?>
