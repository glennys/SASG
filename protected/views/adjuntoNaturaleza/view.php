<?php
/* @var $this AdjuntoNaturalezaController */
/* @var $model AdjuntoNaturaleza */

$this->breadcrumbs=array(
	'Adjunto Naturalezas'=>array('index'),
	$model->id_adjunto_naturaleza,
);

$this->menu=array(
	array('label'=>'List AdjuntoNaturaleza', 'url'=>array('index')),
	array('label'=>'Create AdjuntoNaturaleza', 'url'=>array('create')),
	array('label'=>'Update AdjuntoNaturaleza', 'url'=>array('update', 'id'=>$model->id_adjunto_naturaleza)),
	array('label'=>'Delete AdjuntoNaturaleza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adjunto_naturaleza),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AdjuntoNaturaleza', 'url'=>array('admin')),
);
?>

<h1>View AdjuntoNaturaleza #<?php echo $model->id_adjunto_naturaleza; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adjunto_naturaleza',
		'id_observacion',
		'fecha',
		'adjunto',
		'tipo',
	),
)); ?>
