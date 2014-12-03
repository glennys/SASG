<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnidadesResponsabless', 'url'=>array('index')),
    array('label'=>'Manage UnidadesResponsables', 'url'=>array('admin')),
);
?>

<h1>Create UnidadesResponsables</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
