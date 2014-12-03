<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'NaturalezaObservacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NaturalezaObservacions', 'url'=>array('index')),
    array('label'=>'Manage NaturalezaObservacion', 'url'=>array('admin')),
);
?>

<h1>Create NaturalezaObservacion</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
