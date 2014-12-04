<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lideres Observación'=>array('index'),
	'Vista'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Lideres Observación', 'url'=>array('index')),
	array('label'=>'Crear Lideres Observación', 'url'=>array('create')),
	array('label'=>'Vista Lideres Observación', 'url'=>array('view', 'id_observacion'=>$model->id_observacion, 'id_unidad'=>$model->id_unidad)),
	array('label'=>'Administrar Lideres Observación', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
