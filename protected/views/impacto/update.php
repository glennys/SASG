<?php
/* @var $this ImpactoController */
/* @var $model Impacto */

$this->breadcrumbs=array(
	'Impactos'=>array('index'),
	$model->id_impacto=>array('view','id'=>$model->id_impacto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Impacto', 'url'=>array('index')),
	array('label'=>'Create Impacto', 'url'=>array('create')),
	array('label'=>'View Impacto', 'url'=>array('view', 'id'=>$model->id_impacto)),
	array('label'=>'Manage Impacto', 'url'=>array('admin')),
);
?>

<h1>Update Impacto <?php echo $model->id_impacto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>