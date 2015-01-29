<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Grupo'=>array('index'),
	$model->id_grupo,
);

$this->menu=array(
	array('label'=>'Listar Grupo', 'url'=>array('index')),
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Modificar Grupo', 'url'=>array('update', 'id'=>$model->id_grupo)),
	array('label'=>'Eliminar Grupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_grupo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

<h1>Vista Naturaleza #<?php echo $model->id_grupo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_grupo',
		'parent_id_naturaleza',
		'descripcion',
		'activo',
		'tipo',
		
	),
)); ?>
