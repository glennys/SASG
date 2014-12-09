<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Módulo Operacioness'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Módulo Operacioness', 'url'=>array('index')),
    array('label'=>'Administrar ModuloOperaciones', 'url'=>array('admin')),
);
?>

<h1>Crear Módulo Operaciones</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
