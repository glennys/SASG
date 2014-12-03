<?php
/* @var $this OperacionesController */
/* @var $model Operaciones */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	$model->id_operaciones=>array('view','id'=>$model->id_operaciones),
	'Update',
);

$this->menu=array(
	array('label'=>'List Operaciones', 'url'=>array('index')),
	array('label'=>'Create Operaciones', 'url'=>array('create')),
	array('label'=>'View Operaciones', 'url'=>array('view', 'id'=>$model->id_operaciones)),
	array('label'=>'Manage Operaciones', 'url'=>array('admin')),
);
?>

<h1>Update Operaciones <?php echo $model->id_operaciones; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>