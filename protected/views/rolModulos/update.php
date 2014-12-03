<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolModuloss'=>array('index'),
	'View'=>array('view', 'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolModulos', 'url'=>array('index')),
	array('label'=>'Create RolModulos', 'url'=>array('create')),
	array('label'=>'View RolModulos', 'url'=>array('view', 'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol)),
	array('label'=>'Manage RolModulos', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
