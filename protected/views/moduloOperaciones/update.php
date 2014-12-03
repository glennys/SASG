<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ModuloOperacioness'=>array('index'),
	'View'=>array('view', 'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModuloOperaciones', 'url'=>array('index')),
	array('label'=>'Create ModuloOperaciones', 'url'=>array('create')),
	array('label'=>'View ModuloOperaciones', 'url'=>array('view', 'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos)),
	array('label'=>'Manage ModuloOperaciones', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
