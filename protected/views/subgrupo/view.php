<?php
/* @var $this SubgrupoController */
/* @var $model Subgrupo */

$this->breadcrumbs=array(
	'Subgrupos'=>array('index'),
	$model->id_subgrupo,
);

$this->menu=array(
	array('label'=>'Listar Subgrupo', 'url'=>array('index')),
	array('label'=>'Crear Subgrupo', 'url'=>array('create')),
	array('label'=>'Modificar Subgrupo', 'url'=>array('update', 'id'=>$model->id_subgrupo)),
	array('label'=>'Eliminar Subgrupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_subgrupo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Subgrupo', 'url'=>array('admin')),
);
?>

<h1>Vista Subgrupo #<?php echo $model->id_subgrupo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_subgrupo',
		'tipo_subgrupo',
		'id_grupo',
	),
)); ?>
