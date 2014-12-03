<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidadConsultors'=>array('index'),
	'View'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObservacionesUnidadConsultor', 'url'=>array('index')),
	array('label'=>'Create ObservacionesUnidadConsultor', 'url'=>array('create')),
	array('label'=>'View ObservacionesUnidadConsultor', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Manage ObservacionesUnidadConsultor', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
