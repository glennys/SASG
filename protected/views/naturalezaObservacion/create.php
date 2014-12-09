<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Naturaleza Observación'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Naturaleza Observación', 'url'=>array('index')),
    array('label'=>'Administrar Naturaleza Observación', 'url'=>array('admin')),
);
?>

<h1>Crear Naturaleza Observación</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
