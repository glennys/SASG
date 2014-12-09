<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Consultor'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Observaciones Consultor', 'url'=>array('index')),
    array('label'=>'Administrar Observaciones Consultor', 'url'=>array('admin')),
);
?>

<h1>Crear Observaciones Consultor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
