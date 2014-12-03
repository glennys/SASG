<?php
/* @var $this SeguimientoController */
/* @var $model Seguimiento */

$this->breadcrumbs=array(
	'Seguimientos'=>array('index'),
	$model->id_adjunto_seguimiento=>array('view','id'=>$model->id_adjunto_seguimiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seguimiento', 'url'=>array('index')),
	array('label'=>'Create Seguimiento', 'url'=>array('create')),
	array('label'=>'View Seguimiento', 'url'=>array('view', 'id'=>$model->id_adjunto_seguimiento)),
	array('label'=>'Manage Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Update Seguimiento <?php echo $model->id_adjunto_seguimiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>