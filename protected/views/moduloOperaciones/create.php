<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ModuloOperacioness'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModuloOperacioness', 'url'=>array('index')),
    array('label'=>'Manage ModuloOperaciones', 'url'=>array('admin')),
);
?>

<h1>Create ModuloOperaciones</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
