<?php
/* @var $this AuditoriaControlController */
/* @var $model AuditoriaControl */

$this->breadcrumbs=array(
	'Auditoria Controls'=>array('index'),
	$model->id_auditoria_control,
);

$this->menu=array(
	array('label'=>'List AuditoriaControl', 'url'=>array('index')),
	array('label'=>'Create AuditoriaControl', 'url'=>array('create')),
	array('label'=>'Update AuditoriaControl', 'url'=>array('update', 'id'=>$model->id_auditoria_control)),
	array('label'=>'Delete AuditoriaControl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_auditoria_control),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AuditoriaControl', 'url'=>array('admin')),
);
?>

<h1>View AuditoriaControl #<?php echo $model->id_auditoria_control; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_auditoria_control',
		'fecha_creacion',
		'modulo',
		'metodo',
		'direccion_ip',
		'usuario',
	),
)); ?>
