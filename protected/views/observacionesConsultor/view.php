<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesConsultors'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ObservacionesConsultor', 'url'=>array('index')),
	array('label'=>'Create ObservacionesConsultor', 'url'=>array('create')),
	array('label'=>'Update ObservacionesConsultor', 'url'=>array('update', 'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Delete ObservacionesConsultor', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesConsultor', 'url'=>array('admin')),
);
?>

<h1>View ObservacionesConsultor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observaciones',
		'id_consultor',
		'fecha_asignacion',
		'otro',
	),
)); ?>
