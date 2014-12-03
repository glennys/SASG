<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidad'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidad', 'url'=>array('index')),
    array('label'=>'Manage ObservacionesUnidad', 'url'=>array('admin')),
);
?>

<h1>Create ObservacionesUnidad</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
