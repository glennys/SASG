<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id_informe,
);

$this->menu=array(
	array('label'=>'List Informe', 'url'=>array('index')),
	array('label'=>'Create Informe', 'url'=>array('create')),
	array('label'=>'Update Informe', 'url'=>array('update', 'id'=>$model->id_informe)),
	array('label'=>'Delete Informe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informe),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Informe', 'url'=>array('admin')),
);
?>

<h1>View Informe #<?php echo $model->id_informe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'id_tipo_auditoria',
		'id_estado',
		'fecha_creacion',
		'fecha_periodo_auditoria',
		'cerrada',
		'codigo',
		'nombre',
		'propietario',
		'fecha_emision',
		'ano',
	),
)); ?>
