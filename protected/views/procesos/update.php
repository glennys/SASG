<?php
/* @var $this ProcesosController */
/* @var $model Procesos */

$this->breadcrumbs=array(
	'Procesoses'=>array('index'),
	$model->id_proceso=>array('view','id'=>$model->id_proceso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Procesos', 'url'=>array('index')),
	array('label'=>'Create Procesos', 'url'=>array('create')),
	array('label'=>'View Procesos', 'url'=>array('view', 'id'=>$model->id_proceso)),
	array('label'=>'Manage Procesos', 'url'=>array('admin')),
);
?>

<h1>Update Procesos <?php echo $model->id_proceso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>