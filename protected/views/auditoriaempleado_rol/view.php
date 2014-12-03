<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'auditoriampleadoRols'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List auditoriampleadoRol', 'url'=>array('index')),
	array('label'=>'Create auditoriampleadoRol', 'url'=>array('create')),
	array('label'=>'Update auditoriampleadoRol', 'url'=>array('update', 'id_rol'=>$model->id_rol, 'id_empleado'=>$model->id_empleado)),
	array('label'=>'Delete auditoriampleadoRol', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_rol'=>$model->id_rol, 'id_empleado'=>$model->id_empleado),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage auditoriampleadoRol', 'url'=>array('admin')),
);
?>

<h1>View auditoriampleadoRol</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rol',
		'id_empleado',
	),
)); ?>
