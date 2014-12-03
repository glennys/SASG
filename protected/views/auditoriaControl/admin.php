<?php
/* @var $this AuditoriaControlController */
/* @var $model AuditoriaControl */

$this->breadcrumbs=array(
	'Auditoria Controls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AuditoriaControl', 'url'=>array('index')),
	array('label'=>'Create AuditoriaControl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#auditoria-control-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Auditoria Controls</h1>

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


<!--en el array de columns se colocan los campos q deseamos mostrar-->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'auditoria-control-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fecha_creacion',
		'modulo',
		'metodo',
		'direccion_ip',
		'usuario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
