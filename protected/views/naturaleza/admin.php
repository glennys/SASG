<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'List Naturaleza', 'url'=>array('index')),
	array('label'=>'Create Naturaleza', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#naturaleza-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Naturalezas</h1>

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
	'id'=>'naturaleza-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_naturaleza',
		'parent_id_naturaleza',
		'descripcion',
		'activo',
		'tipo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
