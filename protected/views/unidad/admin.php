<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Unidad', 'url'=>array('index')),
	array('label'=>'Create Unidad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Unidads</h1>

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
	'id'=>'unidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_unidad',
		'parent_id_unidad',
		'descripcion',
		'orden',
		'nombre_supervisor_unidad',
		'extension_supervisor_unidad',
		'celular_supervisor_ldap',
		'descripcion_unidad_ldap',
		//'fecha_creacion',
		//'fecha_actualizacion',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
