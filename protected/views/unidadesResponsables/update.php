<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless'=>array('index'),
	'View'=>array('view', 'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnidadesResponsables', 'url'=>array('index')),
	array('label'=>'Create UnidadesResponsables', 'url'=>array('create')),
	array('label'=>'View UnidadesResponsables', 'url'=>array('view', 'id_unidad'=>$model->id_unidad, 'id_observaciones'=>$model->id_observaciones)),
	array('label'=>'Manage UnidadesResponsables', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
