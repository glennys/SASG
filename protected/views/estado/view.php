<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->id_estado,
);

$this->menu=array(
	array('label'=>'Listar Estado', 'url'=>array('index')),
	array('label'=>'Crear Estado', 'url'=>array('create')),
	array('label'=>'Modificar Estado', 'url'=>array('update', 'id'=>$model->id_estado)),
	array('label'=>'Eliminar Estado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Vista Estado #<?php echo $model->id_estado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estado',
		'descripcion',
		'activo',
		'notificacion',
		'tipo_notificacion',
	),
)); ?>
