<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Módulo Operacioness'=>array('index'),
	'Vista'=>array('view', 'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Módulo Operaciones', 'url'=>array('index')),
	array('label'=>'Crear Módulo Operaciones', 'url'=>array('create')),
	array('label'=>'Vista Módulo Operaciones', 'url'=>array('view', 'id_operaciones'=>$model->id_operaciones, 'id_permisos'=>$model->id_permisos)),
	array('label'=>'Administrar Módulo Operaciones', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
