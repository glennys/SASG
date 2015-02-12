<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */

$this->breadcrumbs=array(
	'Observaciones'=>array('index'),
	$model->id_observaciones,
);

$this->menu=array(
	array('label'=>'List Observaciones', 'url'=>array('index')),
	array('label'=>'Create Observaciones', 'url'=>array('create')),
	array('label'=>'Update Observaciones', 'url'=>array('update', 'id'=>$model->id_observaciones)),
	array('label'=>'Delete Observaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_observaciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Observaciones', 'url'=>array('admin')),
);
?>

<h1>View Observaciones #<?php echo $model->id_observaciones; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_observaciones',
		//'id_informe',
		array(
   'name'=>'Informe',
   'value'=>$model->idInforme->nombre,
        ),

		//'id_unidad',
		array(
   'name'=>'Unidad',
   'value'=>$model->idUnidad->descripcion,
        ),
		
		//'id_tipo_criticidad',
		array(
   'name'=>'Criticidad',
   'value'=>$model->idTipoCriticidad->descripcion,
        ),

		//'id_clasificacion',
		array(
   'name'=>'Clasificacion',
   'value'=>$model->idClasificacion->descripcion,
        ),

		//'id_estado',
			array(
   'name'=>'Estado',
   'value'=>$model->idEstado->descripcion,
        ),

		'recomendacion',
		'cerrada',
		'detalle_observacion',
		'accion_correctiva',
		'fecha_inicio_accion_correctiva',
		'fecha_fin_accion_correctiva',
		'codigo',
		'codigo_observacion',

		//'id_auditor',
		//'idAuditor.observaciones',
		
		array(
   'name'=>'Auditor',
   'value'=>$model->idAuditor->observaciones,
        ),

		//'id_tema',
array(
   'name'=>'Tema Interés',
   'value'=>$model->idTema->descripcion,
        ),

		'descripcion',
		
		//'id_riesgo',
		array(
   'name'=>'Riesgo',
   'value'=>$model->idRiesgo->descripcion,
        ),
		
		//'id_grupo',
		array(
   'name'=>'Grupo',
   'value'=>$model->idGrupo->descripcion,
        ),

        //'id_subgrupo',
        array(
   'name'=>'Subgrupo',
   'value'=>$model->idSubgrupo->tipo_subgrupo,
        ),
		
		'avance_pac',
	),
)); ?>
