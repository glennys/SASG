<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolModuloss'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolModuloss', 'url'=>array('index')),
    array('label'=>'Manage RolModulos', 'url'=>array('admin')),
);
?>

<h1>Create RolModulos</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
