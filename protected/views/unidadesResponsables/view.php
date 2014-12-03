<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List UnidadesResponsables', 'url'=>array('index')),
	array('label'=>'Create UnidadesResponsables', 'url'=>array('create')),
	array('label'=>'Update UnidadesResponsables', 'url'=>array('update', 'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Delete UnidadesResponsables', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadesResponsables', 'url'=>array('admin')),
);
?>

<h1>View UnidadesResponsables</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_unidad',
		'id_observaciones',
		'fecha_creacion',
		'nombre_responsable',
		'telefono',
		'unidades_involucradas',
		'fecha_inicio_estimada',
		'fecha_fin_estimada',
		'indicador_logro',
		'evento',
		'correo',
		'unidades_apoyo',
		'id_estado',
	),
)); ?>
