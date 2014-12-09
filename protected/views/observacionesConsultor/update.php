<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Consultor'=>array('index'),
	'Vista'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List Observaciones Consultor', 'url'=>array('index')),
	array('label'=>'Create Observaciones Consultor', 'url'=>array('create')),
	array('label'=>'Vista Observaciones Consultor', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_consultor'=>$model->id_consultor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Administrar Observaciones Consultor', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
