<?php
/* @var $this SeguimientoController */
/* @var $model Seguimiento */

$this->breadcrumbs=array(
	'Seguimientos'=>array('index'),
	$model->id_adjunto_seguimiento=>array('view','id'=>$model->id_adjunto_seguimiento),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Seguimiento', 'url'=>array('index')),
	array('label'=>'Crear Seguimiento', 'url'=>array('create')),
	array('label'=>'Vista Seguimiento', 'url'=>array('view', 'id'=>$model->id_adjunto_seguimiento)),
	array('label'=>'Administrar Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Modificar Seguimiento <?php echo $model->id_adjunto_seguimiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>