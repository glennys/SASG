<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */

$this->breadcrumbs=array(
	'Observaciones'=>array('index'),
	'Administrar',
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

<h1>Manage Observaciones</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="CGridViewContainer">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_observaciones',


		//'id_informe',
		array(
            'header'=>'Informe',
            'name'=>'id_informe',
            'value' => '$data->idInforme->nombre',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Informe::model()->findAll(), 'id_informe', 'nombre')
        ),		

		//'id_unidad',
			array(
            'header'=>'Unidad',
            'name'=>'id_unidad',
            'value' => '$data->idUnidad->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Unidad::model()->findAll(), 'id_unidad', 'descripcion')
        ),

		//'id_tipo_criticidad',
			array(
            'header'=>'Criticidad',
            'name'=>'id_tipo_criticidad',
            'value' => '$data->idTipoCriticidad->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(TipoCriticidad::model()->findAll(), 'id_tipo_criticidad', 'descripcion')
        ),

		//'id_clasificacion',
			array(
            'header'=>'Clasificacion',
            'name'=>'id_clasificacion',
            'value' => '$data->idClasificacion->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Clasificacion::model()->findAll(), 'id_clasificacion', 'descripcion')
        ),

		//'id_estado',
			array(
            'header'=>'Estado',
            'name'=>'id_estado',
            'value' => '$data->idEstado->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Estado::model()->findAll(), 'id_estado', 'descripcion')
        ),

		'recomendacion',
		array(
            'header'=>'Recomendacion',
            'name'=>'recomendacion',
            //'value' => '$data->id_observaciones->recomendacion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Observaciones::model()->findAll(), 'id_observaciones', 'Recomendacion')
        ),




		'cerrada',
		'detalle_observacion',
		'accion_correctiva',
		'fecha_inicio_accion_correctiva',
		'fecha_fin_accion_correctiva',
		'codigo',
		'codigo_observacion',


		//'id_auditor',
				array(
            'header'=>'Auditor',
            'name'=>'id_auditor',
            'value' => '$data->idAuditor->observaciones',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(ObservacionesAuditor::model()->findAll(), 'id_auditor', 'observaciones')
        ),

		//'id_tema',
				array(
            'header'=>'Tema',
            'name'=>'id_tema',
            'value' => '$data->idTema->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(TemaInteres::model()->findAll(), 'id_tema', 'descripcion')
        ),


		'descripcion',

		//'id_riesgo',
				array(
            'header'=>'Riesgo',
            'name'=>'id_riesgo',
            'value' => '$data->idRiesgo->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Riesgo::model()->findAll(), 'id_riesgo', 'descripcion')
        ),

		//'id_grupo',
				array(
            'header'=>'Grupo',
            'name'=>'id_grupo',
            'value' => '$data->idGrupo->descripcion',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Grupo::model()->findAll(), 'id_grupo', 'descripcion')
        ),

        'id_subgrupo',
           /* array(
            'header'=>'Subgrupo',
            'name'=>'id_subgrupo',
            'value' => '$data->idSubgrupo->tipo_subgrupo',
            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
            'filter' => CHtml::listData(Subgrupo::model()->findAll(), 'id_subgrupo', 'tipo_subgrupo')
            ),*/
  

		'avance_pac',
	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>


