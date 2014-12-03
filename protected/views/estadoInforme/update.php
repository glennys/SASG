<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoInformes'=>array('index'),
	'View'=>array('view', 'id_estado'=>$model->id_estado, 'id_informe'=>$model->id_informe),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoInforme', 'url'=>array('index')),
	array('label'=>'Create EstadoInforme', 'url'=>array('create')),
	array('label'=>'View EstadoInforme', 'url'=>array('view', 'id_estado'=>$model->id_estado, 'id_informe'=>$model->id_informe)),
	array('label'=>'Manage EstadoInforme', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
