<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	$model->id_naturaleza=>array('view','id'=>$model->id_naturaleza),
	'Update',
);

$this->menu=array(
	array('label'=>'List Naturaleza', 'url'=>array('index')),
	array('label'=>'Create Naturaleza', 'url'=>array('create')),
	array('label'=>'View Naturaleza', 'url'=>array('view', 'id'=>$model->id_naturaleza)),
	array('label'=>'Manage Naturaleza', 'url'=>array('admin')),
);
?>

<h1>Update Naturaleza <?php echo $model->id_naturaleza; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>