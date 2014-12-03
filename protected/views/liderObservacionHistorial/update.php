<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LiderObservacionHistorials'=>array('index'),
	'View'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiderObservacionHistorial', 'url'=>array('index')),
	array('label'=>'Create LiderObservacionHistorial', 'url'=>array('create')),
	array('label'=>'View LiderObservacionHistorial', 'url'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Manage LiderObservacionHistorial', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
