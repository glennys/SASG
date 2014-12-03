<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LideresObservacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LideresObservacions', 'url'=>array('index')),
    array('label'=>'Manage LideresObservacion', 'url'=>array('admin')),
);
?>

<h1>Create LideresObservacion</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
