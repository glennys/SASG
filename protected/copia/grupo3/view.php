<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id_grupo,
);

$this->menu=array(
	array('label'=>'List Grupo', 'url'=>array('index')),
	array('label'=>'Create Grupo', 'url'=>array('create')),
	array('label'=>'Update Grupo', 'url'=>array('update', 'id'=>$model->id_grupo)),
	array('label'=>'Delete Grupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_grupo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grupo', 'url'=>array('admin')),
);
?>

<h1>View Grupo #<?php echo $model->id_grupo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_grupo',
		'parent_id_grupo',
		'descripcion',
		/*'fecha_creacion',
		'fecha_actualizacion',
		'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',*/
	),
)); ?>
