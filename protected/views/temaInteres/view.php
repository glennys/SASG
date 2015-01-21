<?php
/* @var $this TemaInteresController */
/* @var $model TemaInteres */

$this->breadcrumbs=array(
	'Tema de Interes'=>array('index'),
	$model->id_tema,
);

$this->menu=array(
	array('label'=>'Listar Tema de Interes', 'url'=>array('index')),
	array('label'=>'Crear Tema de Interes', 'url'=>array('create')),
	array('label'=>'Modificar Tema de Interes', 'url'=>array('update', 'id'=>$model->id_tema)),
	array('label'=>'Eliminar Tema de Interes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tema),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tema de Interes', 'url'=>array('admin')),
);
?>

<h1>Vista Tema de Interes #<?php echo $model->id_tema; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tema',
		'descripcion',
		/*'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',*/
	),
)); ?>
