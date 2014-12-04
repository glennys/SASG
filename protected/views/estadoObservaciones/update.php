<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Observacioness'=>array('index'),
	'Vista'=>array('view', 'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Estado Observaciones', 'url'=>array('index')),
	array('label'=>'Crear Estado Observaciones', 'url'=>array('create')),
	array('label'=>'Vista Estado Observaciones', 'url'=>array('view', 'id_proceso'=>$model->id_proceso, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Administrar Estado Observaciones', 'url'=>array('admin')),
); 
?>

<h1>Modificar Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
