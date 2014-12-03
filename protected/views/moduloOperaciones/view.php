<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ModuloOperacioness'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ModuloOperaciones', 'url'=>array('index')),
	array('label'=>'Create ModuloOperaciones', 'url'=>array('create')),
	array('label'=>'Update ModuloOperaciones', 'url'=>array('update', 'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos)),
	array('label'=>'Delete ModuloOperaciones', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuloOperaciones', 'url'=>array('admin')),
);
?>

<h1>View ModuloOperaciones</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_permisos',
		'id_operaciones',
	),
)); ?>
