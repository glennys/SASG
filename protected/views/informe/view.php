<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id_informe,
);

$this->menu=array(
	array('label'=>'Listar Informe', 'url'=>array('index')),
	array('label'=>'Crear Informe', 'url'=>array('create')),
	array('label'=>'Modificar Informe', 'url'=>array('update', 'id'=>$model->id_informe)),
	array('label'=>'Eliminar Informe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informe),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Informe', 'url'=>array('admin')),
);
?>

<h1>Vista Informe #<?php echo $model->id_informe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		//'id_tipo_auditoria',
		array(
   'name'=>'id_tipo_auditoria',
   'value'=>$model->idTipoAuditoria->descripcion,
        ),
		/*
		//'id_estado',
		array(
   'name'=>'id_estado',
   'value'=>$model->idEstado->descripcion,
        ),*/
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
