<?php
/* @var $this OperacionesController */
/* @var $model Operaciones */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	$model->id_operaciones=>array('view','id'=>$model->id_operaciones),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Operaciones', 'url'=>array('index')),
	array('label'=>'Crear Operaciones', 'url'=>array('create')),
	array('label'=>'Vista Operaciones', 'url'=>array('view', 'id'=>$model->id_operaciones)),
	array('label'=>'Administrar Operaciones', 'url'=>array('admin')),
);
?>

<h1>Modificar Operaciones <?php echo $model->id_operaciones; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>