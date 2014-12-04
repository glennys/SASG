<?php
/* @var $this ImpactoController */
/* @var $model Impacto */

$this->breadcrumbs=array(
	'Impactos'=>array('index'),
	$model->id_impacto,
);

$this->menu=array(
	array('label'=>'Listar Impacto', 'url'=>array('index')),
	array('label'=>'Crear Impacto', 'url'=>array('create')),
	array('label'=>'Modificar Impacto', 'url'=>array('update', 'id'=>$model->id_impacto)),
	array('label'=>'Eliminar Impacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_impacto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Impacto', 'url'=>array('admin')),
);
?>

<h1>Vista Impacto #<?php echo $model->id_impacto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_impacto',
		'descripcion',
	
	),
)); ?>
