<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */

$this->breadcrumbs=array(
	'Riesgo'=>array('index'),
	$model->id_riesgo,
);

$this->menu=array(
	array('label'=>'Listar Riesgo', 'url'=>array('index')),
	array('label'=>'Crear Riesgo', 'url'=>array('create')),
	array('label'=>'Modificar Riesgo', 'url'=>array('update', 'id'=>$model->id_riesgo)),
	array('label'=>'Eliminar Riesgo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_riesgo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Riesgo', 'url'=>array('admin')),
);
?>

<h1>Vista Riesgo #<?php echo $model->id_riesgo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_riesgo',
		'descripcion',
	
	),
)); ?>
