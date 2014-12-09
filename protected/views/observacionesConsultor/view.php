<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Consultors'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Observaciones Consultor', 'url'=>array('index')),
	array('label'=>'Crear Observaciones Consultor', 'url'=>array('create')),
	array('label'=>'Modificar Observaciones Consultor', 'url'=>array('update', 'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Eliminar Observaciones Consultor', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesConsultor', 'url'=>array('admin')),
);
?>

<h1>Vista Observaciones Consultor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observaciones',
		'id_consultor',
		'fecha_asignacion',
		'otro',
	),
)); ?>
