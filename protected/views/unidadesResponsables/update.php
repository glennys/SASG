<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless'=>array('index'),
	'View'=>array('view', 'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Unidades Responsables', 'url'=>array('index')),
	array('label'=>'Crear Unidade sResponsables', 'url'=>array('create')),
	array('label'=>'Vista Unidades Responsables', 'url'=>array('view', 'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Administrar Unidades Responsables', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
