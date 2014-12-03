<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidadConsultors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidadConsultors', 'url'=>array('index')),
    array('label'=>'Manage ObservacionesUnidadConsultor', 'url'=>array('admin')),
);
?>

<h1>Create ObservacionesUnidadConsultor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
