<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidads'=>array('index'),
	$model->id_unidad=>array('view','id'=>$model->id_unidad),
	'Update',
);

$this->menu=array(
	array('label'=>'List Unidad', 'url'=>array('index')),
	array('label'=>'Create Unidad', 'url'=>array('create')),
	array('label'=>'View Unidad', 'url'=>array('view', 'id'=>$model->id_unidad)),
	array('label'=>'Manage Unidad', 'url'=>array('admin')),
);
?>

<h1>Update Unidad <?php echo $model->id_unidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>