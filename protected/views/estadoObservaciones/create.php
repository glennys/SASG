<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Observacioness'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Estado Observacioness', 'url'=>array('index')),
    array('label'=>'Administrar Estado Observaciones', 'url'=>array('admin')),
);
?>

<h1>Crear Estado Observaciones</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
