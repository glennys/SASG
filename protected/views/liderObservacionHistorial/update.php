<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Historial Lider'=>array('index'),
	'Vista'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Historial Lider', 'url'=>array('index')),
	array('label'=>'Crear Historial Lider', 'url'=>array('create')),
	array('label'=>'Vista Historial Lider', 'url'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_supervisor'=>$model->id_supervisor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Administrar Historial Lider', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
