<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Auditor'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Observaciones Auditor', 'url'=>array('index')),
	array('label'=>'Crear Observaciones Auditor', 'url'=>array('create')),
	array('label'=>'Modificar Observaciones Auditor', 'url'=>array('update', 'id_observaciones'=>$model->id_observaciones, 'id_auditor'=>$model->id_auditor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Eliminar Observaciones Auditor', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observaciones'=>$model->id_observaciones, 'id_auditor'=>$model->id_auditor, 'fecha_asignacion'=>$model->fecha_asignacion),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesAuditor', 'url'=>array('admin')),
);
?>

<h1>Vista Observaciones Consultor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observaciones',
		'id_auditor',
		'fecha_asignacion',
		'otro',
	),
)); ?>
