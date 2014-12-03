<?php
/* @var $this ImpactoController */
/* @var $model Impacto */

$this->breadcrumbs=array(
	'Impactos'=>array('index'),
	$model->id_impacto,
);

$this->menu=array(
	array('label'=>'List Impacto', 'url'=>array('index')),
	array('label'=>'Create Impacto', 'url'=>array('create')),
	array('label'=>'Update Impacto', 'url'=>array('update', 'id'=>$model->id_impacto)),
	array('label'=>'Delete Impacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_impacto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Impacto', 'url'=>array('admin')),
);
?>

<h1>View Impacto #<?php echo $model->id_impacto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_impacto',
		'descripcion',
	
	),
)); ?>
