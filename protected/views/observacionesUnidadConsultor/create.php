<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Unidad Consultor'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Unidad Consultor', 'url'=>array('index')),
    array('label'=>'Administrar Unidad Consultor', 'url'=>array('admin')),
);
?>

<h1>Create Unidad Consultor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
