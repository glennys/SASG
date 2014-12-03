<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoInformes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoInformes', 'url'=>array('index')),
    array('label'=>'Manage EstadoInforme', 'url'=>array('admin')),
);
?>

<h1>Crear Estado Informe</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
