<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LideresObservacions'=>array('index'),
	'View'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad),
	'Update',
);

$this->menu=array(
	array('label'=>'List LideresObservacion', 'url'=>array('index')),
	array('label'=>'Create LideresObservacion', 'url'=>array('create')),
	array('label'=>'View LideresObservacion', 'url'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad)),
	array('label'=>'Manage LideresObservacion', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
