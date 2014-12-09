<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Módulo Operacioness'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar Módulo Operaciones', 'url'=>array('index')),
	array('label'=>'Crear Módulo Operaciones', 'url'=>array('create')),
	array('label'=>'Modificar Módulo Operaciones', 'url'=>array('update', 'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos)),
	array('label'=>'Eliminar Módulo Operaciones', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuloOperaciones', 'url'=>array('admin')),
);
?>

<h1>Vista Módulo Operaciones</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_permisos',
		'id_operaciones',
	),
)); ?>
