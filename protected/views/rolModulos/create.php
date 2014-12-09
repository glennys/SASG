<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol Moduloss'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Rol Moduloss', 'url'=>array('index')),
    array('label'=>'Administrar Rol Modulos', 'url'=>array('admin')),
);
?>

<h1>Crear Rol Modulos</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
