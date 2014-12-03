<?php
/* @var $this ClasificacionController */
/* @var $model Clasificacion */

$this->breadcrumbs=array(
	'Clasificación'=>array('index'),
	$model->id_clasificacion,
);

$this->menu=array(
	array('label'=>'Listar Clasificación', 'url'=>array('index')),
	array('label'=>'Crear Clasificación', 'url'=>array('create')),
	array('label'=>'Modificar Clasificación', 'url'=>array('update', 'id'=>$model->id_clasificacion)),
	array('label'=>'Eliminar Clasificación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_clasificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Clasificación', 'url'=>array('admin')),
);
?>

<h1>Vista de Clasificación #<?php echo $model->id_clasificacion; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_clasificacion',
		'descripcion',
		
	),
)); ?>
