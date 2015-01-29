<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Informe', 'url'=>array('index')),
	array('label'=>'Crear Informe', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informe-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Informes</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'informe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_informe',
		//'id_tipo_auditoria',
		array(
   'name'=>'id_tipo_auditoria',
   'value'=>'$data->idTipoAuditoria->descripcion',
        ), 
		/*
		'id_estado',
			array(
   'name'=>'id_estado',
   'value'=>'$data->idEstado->descripcion',
        ),*/
	
		// 'fecha_creacion',
		'fecha_periodo_auditoria',
		'cerrada',
		'codigo',
		'nombre',
		'propietario',
		'fecha_emision',
		'ano',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
