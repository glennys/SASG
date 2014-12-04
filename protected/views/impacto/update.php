<?php
/* @var $this ImpactoController */
/* @var $model Impacto */

$this->breadcrumbs=array(
	'Impactos'=>array('index'),
	$model->id_impacto=>array('view','id'=>$model->id_impacto),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Impacto', 'url'=>array('index')),
	array('label'=>'Crear Impacto', 'url'=>array('create')),
	array('label'=>'Vista Impacto', 'url'=>array('view', 'id'=>$model->id_impacto)),
	array('label'=>'Administrar Impacto', 'url'=>array('admin')),
);
?>

<h1>Modificar Impacto <?php echo $model->id_impacto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>