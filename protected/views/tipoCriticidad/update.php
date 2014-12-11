<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */

$this->breadcrumbs=array(
	'Tipo Criticidads'=>array('index'),
	$model->id_tipo_criticidad=>array('view','id'=>$model->id_tipo_criticidad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Tipo Criticidad', 'url'=>array('index')),
	array('label'=>'Crear Tipo Criticidad', 'url'=>array('create')),
	array('label'=>'Vista Tipo Criticidad', 'url'=>array('view', 'id'=>$model->id_tipo_criticidad)),
	array('label'=>'Administrar Tipo Criticidad', 'url'=>array('admin')),
);
?>

<h1>Modificar TipoCriticidad <?php echo $model->id_tipo_criticidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>