<?php
/* @var $this ObservacionesAuditorController */
/* @var $model ObservacionesAuditor */

$this->breadcrumbs=array(
	'Observaciones Auditors'=>array('index'),
	$model->id_auditor,
);

$this->menu=array(
	array('label'=>'List ObservacionesAuditor', 'url'=>array('index')),
	array('label'=>'Create ObservacionesAuditor', 'url'=>array('create')),
	array('label'=>'Update ObservacionesAuditor', 'url'=>array('update', 'id'=>$model->id_auditor)),
	array('label'=>'Delete ObservacionesAuditor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_auditor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesAuditor', 'url'=>array('admin')),
);
?>

<h1>View ObservacionesAuditor #<?php echo $model->id_auditor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_auditor',
		'fecha_asignacion',
		'observaciones',
		'otro',
		/*
		'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',
		*/
	),
)); ?>
