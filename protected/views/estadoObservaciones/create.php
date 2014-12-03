<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoObservacioness'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoObservacioness', 'url'=>array('index')),
    array('label'=>'Manage EstadoObservaciones', 'url'=>array('admin')),
);
?>

<h1>Create EstadoObservaciones</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
