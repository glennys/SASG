<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Tipo Criticidads'=>array('index'),
	$model->id_tipo_criticidad=>array('view','id'=>$model->id_tipo_criticidad),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoCriticidad', 'url'=>array('index')),
	array('label'=>'Create TipoCriticidad', 'url'=>array('create')),
	array('label'=>'View TipoCriticidad', 'url'=>array('view', 'id'=>$model->id_tipo_criticidad)),
	array('label'=>'Manage TipoCriticidad', 'url'=>array('admin')),
);
?>

<h1>Update TipoCriticidad <?php echo $model->id_tipo_criticidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>