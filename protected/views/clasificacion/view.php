<?php
/* @var $this ClasificacionController */
/* @var $model Clasificacion */

$this->breadcrumbs=array(
	'Clasificacions'=>array('index'),
	$model->id_clasificacion,
);

$this->menu=array(
	array('label'=>'List Clasificacion', 'url'=>array('index')),
	array('label'=>'Create Clasificacion', 'url'=>array('create')),
	array('label'=>'Update Clasificacion', 'url'=>array('update', 'id'=>$model->id_clasificacion)),
	array('label'=>'Delete Clasificacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_clasificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clasificacion', 'url'=>array('admin')),
);
?>

<h1>View Clasificacion #<?php echo $model->id_clasificacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_clasificacion',
		'descripcion',
		
	),
)); ?>
