<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividads'=>array('index'),
	$model->id_actividad=>array('view','id'=>$model->id_actividad),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actividad', 'url'=>array('index')),
	array('label'=>'Create Actividad', 'url'=>array('create')),
	array('label'=>'View Actividad', 'url'=>array('view', 'id'=>$model->id_actividad)),
	array('label'=>'Manage Actividad', 'url'=>array('admin')),
);
?>

<h1>Update Actividad <?php echo $model->id_actividad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>