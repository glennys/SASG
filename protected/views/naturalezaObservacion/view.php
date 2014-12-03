<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'NaturalezaObservacions'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List NaturalezaObservacion', 'url'=>array('index')),
	array('label'=>'Create NaturalezaObservacion', 'url'=>array('create')),
	array('label'=>'Update NaturalezaObservacion', 'url'=>array('update', 'id_naturaleza'=>$model->id_naturaleza, 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Delete NaturalezaObservacion', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_naturaleza'=>$model->id_naturaleza, 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NaturalezaObservacion', 'url'=>array('admin')),
);
?>

<h1>View NaturalezaObservacion</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_naturaleza',
		'id_observaciones',
		'id_unidad',
		'fecha_observacion',
		'id_actividad',
		'descripcion',
	),
)); ?>
