<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesConsultors'=>array('index'),
	'View'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObservacionesConsultor', 'url'=>array('index')),
	array('label'=>'Create ObservacionesConsultor', 'url'=>array('create')),
	array('label'=>'View ObservacionesConsultor', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Manage ObservacionesConsultor', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
