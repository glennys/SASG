<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Informes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Estado Informes', 'url'=>array('index')),
    array('label'=>'Administrar EstadoInforme', 'url'=>array('admin')),
);
?>

<h1>Crear Estado Informe</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
