<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Unidad'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Observaciones Unidad', 'url'=>array('index')),
    array('label'=>'Administrar Observaciones Unidad', 'url'=>array('admin')),
);
?>

<h1>Crear Observación Unidad</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
