<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */

$this->breadcrumbs=array(
	'Tipo Observacions'=>array('index'),
	$model->id_tipo=>array('view','id'=>$model->id_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoObservacion', 'url'=>array('index')),
	array('label'=>'Create TipoObservacion', 'url'=>array('create')),
	array('label'=>'View TipoObservacion', 'url'=>array('view', 'id'=>$model->id_tipo)),
	array('label'=>'Manage TipoObservacion', 'url'=>array('admin')),
);
?>

<h1>Update TipoObservacion <?php echo $model->id_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>