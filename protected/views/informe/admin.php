<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Informe', 'url'=>array('index')),
	array('label'=>'Create Informe', 'url'=>array('create')),
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

<h1>Manage Informes</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'informe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_informe',
		'id_tipo_auditoria',
		'id_estado',
		'fecha_creacion',
		'fecha_periodo_auditoria',
		'cerrada',
		/*
		'codigo',
		'nombre',
		'propietario',
		'fecha_emision',
		'ano',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
