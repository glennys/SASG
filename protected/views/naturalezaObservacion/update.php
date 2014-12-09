<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Naturaleza Observación'=>array('index'),
	'Vista'=>array('view', 'id_naturaleza'=>$model->id_naturaleza, 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Naturaleza Observación', 'url'=>array('index')),
	array('label'=>'Crear Naturaleza Observación', 'url'=>array('create')),
	array('label'=>'Vista Naturaleza Observación', 'url'=>array('view', 'id_naturaleza'=>$model->id_naturaleza, 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Administrar Naturaleza Observación', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
