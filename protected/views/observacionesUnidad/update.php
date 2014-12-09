<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Unidad'=>array('index'),
	'Vista'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Observaciones Unidad', 'url'=>array('index')),
	array('label'=>'Crear Observaciones Unidad', 'url'=>array('create')),
	array('label'=>'Vista Observaciones Unidad', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_unidades'=>$model->id_unidades)),
	array('label'=>'Administrar Observaciones Unidad', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
