<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Unidad Consultors'=>array('index'),
	'View'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Unidad Consultor', 'url'=>array('index')),
	array('label'=>'Crear Unidad Consultor', 'url'=>array('create')),
	array('label'=>'Vista Unidad Consultor', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidad'=>$model->id_unidad, 'fecha_observacion'=>$model->fecha_observacion, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Administrar Unidad Consultor', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
