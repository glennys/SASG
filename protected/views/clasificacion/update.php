<?php
/* @var $this ClasificacionController */
/* @var $model Clasificacion */

$this->breadcrumbs=array(
	'Clasificacions'=>array('index'),
	$model->id_clasificacion=>array('view','id'=>$model->id_clasificacion),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Clasificación', 'url'=>array('index')),
	array('label'=>'Crear Clasificación', 'url'=>array('create')),
	array('label'=>'Vista Clasificación', 'url'=>array('view', 'id'=>$model->id_clasificacion)),
	array('label'=>'Administrar Clasificación', 'url'=>array('admin')),
);
?>

<h1>Modificar Clasificación <?php echo $model->id_clasificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>