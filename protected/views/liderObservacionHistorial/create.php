<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Historial Lider'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Historial Lider', 'url'=>array('index')),
    array('label'=>'Administrar Historial Lider', 'url'=>array('admin')),
);
?>

<h1>Crear Historial Lider</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
