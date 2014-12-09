<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolModuloss'=>array('index'),
	'Vista'=>array('view', 'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Rol Modulos', 'url'=>array('index')),
	array('label'=>'Crear Rol Modulos', 'url'=>array('create')),
	array('label'=>'Vista Rol Modulos', 'url'=>array('view', 'id_permisos'=>$model->id_permisos, 'id_rol'=>$model->id_rol)),
	array('label'=>'Administrar Rol Modulos', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
