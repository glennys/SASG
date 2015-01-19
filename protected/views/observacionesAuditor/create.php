<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Auditor'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar  Auditor', 'url'=>array('index')),
    array('label'=>'Administrar Auditor', 'url'=>array('admin')),
);
?>

<h1>Crear Auditor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
