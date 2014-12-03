<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoObservacioness'=>array('index'),
	'View'=>array('view', 'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoObservaciones', 'url'=>array('index')),
	array('label'=>'Create EstadoObservaciones', 'url'=>array('create')),
	array('label'=>'View EstadoObservaciones', 'url'=>array('view', 'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Manage EstadoObservaciones', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
