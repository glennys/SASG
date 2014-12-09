<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */

$this->breadcrumbs=array(
	'Observaciones'=>array('index'),
	$model->id_observaciones,
);

$this->menu=array(
	array('label'=>'Lista de Observaciones', 'url'=>array('index')),
	array('label'=>'Crear Observaciones', 'url'=>array('create')),
	array('label'=>'Modifcar Observaciones', 'url'=>array('update', 'id'=>$model->id_observaciones)),
	array('label'=>'Eliminar Observaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_observaciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Observaciones', 'url'=>array('admin')),
);
?>

<h1>View Observaciones #<?php echo $model->id_observaciones; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_observaciones',
		'id_informe',
		//'id_unidad',
		array(
   'name'=>'id_unidad',
   'value'=>$model->idUnidad->descripcion,
        ), 
		//'id_naturaleza',
		  array(
   'name'=>'id_naturaleza',
   'value'=>$model->idNaturaleza->descripcion,
  ),
		//'id_tipo_criticidad',
		array(
   'name'=>'id_tipo_criticidad',
   'value'=>$model->idTipoCriticidad->descripcion,
  ),
		//'id_tipo_observacion',
		array(
   'name'=>'id_tipo_observacion',
   'value'=>$model->idTipoObservacion->descripcion,
  ),
		//'id_impacto',
		array(
   'name'=>'id_impacto',
   'value'=>$model->idImpacto->descripcion,
  ),
		//'id_clasificacion',
		array(
   'name'=>'id_clasificacion',
   'value'=>$model->idClasificacion->descripcion,
  ),
		//'id_estado',
		array(
   'name'=>'id_estado',
   'value'=>$model->idEstado->descripcion,
  ),
		'recomendacion',
		'cerrada',
		'detalle_observacion',
		'accion_correctiva',
		'fecha_inicio_accion_correctiva',
		'fecha_fin_accion_correctiva',
		'plan_accion_general',
		'codigo',
		'codigo_observacion',
		
	),
)); ?>
