<?php
/* @var $this ProcesosController */
/* @var $model Procesos */

$this->breadcrumbs=array(
	'Procesoses'=>array('index'),
	$model->id_proceso,
);

$this->menu=array(
	array('label'=>'Listar Procesos', 'url'=>array('index')),
	array('label'=>'Crear Procesos', 'url'=>array('create')),
	array('label'=>'Modificar Procesos', 'url'=>array('update', 'id'=>$model->id_proceso)),
	array('label'=>'Eliminar Procesos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proceso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Procesos', 'url'=>array('admin')),
);
?>

<h1>Vista Procesos #<?php echo $model->id_proceso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proceso',
		'parent_id_proceso',
		'nombre_proceso',
		'descripcion_proceso',
		
	),
)); ?>
