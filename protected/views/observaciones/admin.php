<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */

$this->breadcrumbs=array(
	'Observaciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Observaciones', 'url'=>array('index')),
	array('label'=>'Create Observaciones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#observaciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Observaciones</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_observaciones',
		//'id_informe',
		 array(
   'name'=>'id_informe',
   'value'=>'$data->idInforme->nombre',
  ),
		//'id_unidad',
		 array(
   'name'=>'id_unidad',
   'value'=>'$data->idUnidad->descripcion',
        ), 
		//'id_naturaleza',
		  array(
   'name'=>'id_naturaleza',
   'value'=>'$data->idNaturaleza->descripcion',
  ), 
		//'id_tipo_criticidad',
		array(
   'name'=>'id_tipo_criticidad',
   'value'=>'$data->idTipoCriticidad->descripcion',
  ),
		//'id_tipo_observacion',
		 array(
   'name'=>'id_tipo_observacion',
   'value'=>'$data->idTipoObservacion->descripcion',
  ),

		//'id_impacto',
		array(
   'name'=>'id_impacto',
   'value'=>'$data->idImpacto->descripcion',
  ),
		//'id_clasificacion',
		array(
   'name'=>'id_clasificacion',
   'value'=>'$data->idClasificacion->descripcion',
  ),
		//'id_estado',
		array(
   'name'=>'id_estado',
   'value'=>'$data->idEstado->descripcion',
  ),
		'recomendacion',
		'cerrada',
		/*
		'detalle_observacion',
		'accion_correctiva',
		'fecha_inicio_accion_correctiva',
		'fecha_fin_accion_correctiva',
		'plan_accion_general',
		'codigo',
		'codigo_observacion',
		'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
