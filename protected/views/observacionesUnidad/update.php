<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidad'=>array('index'),
	'View'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidad', 'url'=>array('index')),
	array('label'=>'Create ObservacionesUnidad', 'url'=>array('create')),
	array('label'=>'View ObservacionesUnidad', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades)),
	array('label'=>'Manage ObservacionesUnidad', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
