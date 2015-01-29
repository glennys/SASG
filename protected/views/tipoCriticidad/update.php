<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Criticidad'=>array('index'),
	$model->id_tipo_criticidad=>array('view','id'=>$model->id_tipo_criticidad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar  Criticidad', 'url'=>array('index')),
	array('label'=>'Crear  Criticidad', 'url'=>array('create')),
	array('label'=>'Vista  Criticidad', 'url'=>array('view', 'id'=>$model->id_tipo_criticidad)),
	array('label'=>'Administrar  Criticidad', 'url'=>array('admin')),
);
?>

<h1>Modificar Criticidad <?php echo $model->id_tipo_criticidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>