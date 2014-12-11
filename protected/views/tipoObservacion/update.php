<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */

$this->breadcrumbs=array(
	'Tipo Observacions'=>array('index'),
	$model->id_tipo=>array('view','id'=>$model->id_tipo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Tipo Observación', 'url'=>array('index')),
	array('label'=>'Create Tipo Observación', 'url'=>array('create')),
	array('label'=>'View Tipo Observación', 'url'=>array('view', 'id'=>$model->id_tipo)),
	array('label'=>'Manage Tipo Observación', 'url'=>array('admin')),
);
?>

<h1>Modificar Tipo Observación <?php echo $model->id_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>