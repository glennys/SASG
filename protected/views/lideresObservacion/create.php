<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lideres Observación'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Lideres Observación', 'url'=>array('index')),
    array('label'=>'Administrar Lideres Observación', 'url'=>array('admin')),
);
?>

<h1>Crear Lideres Observación</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
