<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */

$this->breadcrumbs=array(
	'Riesgo'=>array('index'),
	$model->id_riesgo=>array('view','id'=>$model->id_riesgo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Riesgo', 'url'=>array('index')),
	array('label'=>'Crear Riesgo', 'url'=>array('create')),
	array('label'=>'Vista Riesgo', 'url'=>array('view', 'id'=>$model->id_riesgo)),
	array('label'=>'Administrar Riesgo', 'url'=>array('admin')),
);
?>

<h1>Modificar Riesgo <?php echo $model->id_riesgo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>