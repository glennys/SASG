<?php
/* @var $this AdjuntosInformeController */
/* @var $model AdjuntosInforme */

$this->breadcrumbs=array(
	'Adjuntos Informes'=>array('index'),
	$model->id_adjunto,
);

$this->menu=array(
	array('label'=>'List AdjuntosInforme', 'url'=>array('index')),
	array('label'=>'Create AdjuntosInforme', 'url'=>array('create')),
	array('label'=>'Update AdjuntosInforme', 'url'=>array('update', 'id'=>$model->id_adjunto)),
	array('label'=>'Delete AdjuntosInforme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adjunto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AdjuntosInforme', 'url'=>array('admin')),
);
?>

<h1>View AdjuntosInforme #<?php echo $model->id_adjunto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adjunto',
		'id_informe',
		'fecha',
		'adjunto',
		'tipo',
	),
)); ?>
