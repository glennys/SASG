<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LiderObservacionHistorials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiderObservacionHistorials', 'url'=>array('index')),
    array('label'=>'Manage LiderObservacionHistorial', 'url'=>array('admin')),
);
?>

<h1>Create LiderObservacionHistorial</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
