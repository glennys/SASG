<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'auditoriampleadoRols'=>array('index'),
	'View'=>array('view', 'id_rol'=>$model->id_rol, 'id_empleado'=>$model->id_empleado),
	'Update',
);

$this->menu=array(
	array('label'=>'List auditoriampleadoRol', 'url'=>array('index')),
	array('label'=>'Create auditoriampleadoRol', 'url'=>array('create')),
	array('label'=>'View auditoriampleadoRol', 'url'=>array('view', 'id_rol'=>$model->id_rol, 'id_empleado'=>$model->id_empleado)),
	array('label'=>'Manage auditoriampleadoRol', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
