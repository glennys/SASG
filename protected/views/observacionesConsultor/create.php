<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesConsultors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObservacionesConsultors', 'url'=>array('index')),
    array('label'=>'Manage ObservacionesConsultor', 'url'=>array('admin')),
);
?>

<h1>Create ObservacionesConsultor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
