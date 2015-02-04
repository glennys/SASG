<?php
/* @var $this TipoAuditoriaController */
/* @var $model TipoAuditoria */

$this->breadcrumbs=array(
	'Tipo Auditorias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar TipoAuditoria', 'url'=>array('index')),
	array('label'=>'Crear TipoAuditoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-auditoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tipo Auditorias</h1>

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
	'id'=>'tipo-auditoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tipo_auditoria',
		'descripcion',
		'abreviatura_tipo_auditoria',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
