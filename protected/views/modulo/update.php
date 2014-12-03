<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->id_permisos=>array('view','id'=>$model->id_permisos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modulo', 'url'=>array('index')),
	array('label'=>'Create Modulo', 'url'=>array('create')),
	array('label'=>'View Modulo', 'url'=>array('view', 'id'=>$model->id_permisos)),
	array('label'=>'Manage Modulo', 'url'=>array('admin')),
);
?>

<h1>Update Modulo <?php echo $model->id_permisos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>