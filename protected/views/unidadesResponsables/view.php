<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Unidades Responsables', 'url'=>array('index')),
	array('label'=>'Crear Unidades Responsables', 'url'=>array('create')),
	array('label'=>'Modificar Unidades Responsables', 'url'=>array('update', 'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Eliminar Unidades Responsables', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadesResponsables', 'url'=>array('admin')),
);
?>

<h1>Vista  Unidades Responsables</h1>

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
