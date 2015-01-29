<?php
/* @var $this SubgrupoController */
/* @var $model Subgrupo */

$this->breadcrumbs=array(
	'Subgrupos'=>array('index'),
	$model->id_subgrupo,
);

$this->menu=array(
	array('label'=>'List Subgrupo', 'url'=>array('index')),
	array('label'=>'Create Subgrupo', 'url'=>array('create')),
	array('label'=>'Update Subgrupo', 'url'=>array('update', 'id'=>$model->id_subgrupo)),
	array('label'=>'Delete Subgrupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_subgrupo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subgrupo', 'url'=>array('admin')),
);
?>

<h1>View Subgrupo #<?php echo $model->id_subgrupo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_subgrupo',
		'tipo_subgrupo',
	),
)); ?>
