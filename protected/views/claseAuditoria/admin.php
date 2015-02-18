<?php
/* @var $this ClaseAuditoriaController */
/* @var $model ClaseAuditoria */

$this->breadcrumbs=array(
	'Clase Auditorias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ClaseAuditoria', 'url'=>array('index')),
	array('label'=>'Create ClaseAuditoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clase-auditoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clase Auditorias</h1>

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
	'id'=>'clase-auditoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_clase_auditoria',
		'descripcion',
		'abreviatura_clase_auditoria',
		'fecha_creacion',
		'fecha_actualizacion',
		'in_stat',
		/*
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
