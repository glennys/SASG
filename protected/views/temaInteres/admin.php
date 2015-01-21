<?php
/* @var $this TemaInteresController */
/* @var $model TemaInteres */

$this->breadcrumbs=array(
	'Tema de Interes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Tema de Interes', 'url'=>array('index')),
	array('label'=>'Crear Tema de Interes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tema-interes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tema de Interes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tema-interes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tema',
		'descripcion',
		/*
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
