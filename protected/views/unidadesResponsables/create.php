<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsables'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Unidades Responsables', 'url'=>array('index')),
    array('label'=>'Administrar Unidades Responsables', 'url'=>array('admin')),
);
?>

<h1>Crear Unidades Responsables</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
