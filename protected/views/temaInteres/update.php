<?php
/* @var $this TemaInteresController */
/* @var $model TemaInteres */

$this->breadcrumbs=array(
	'Tema Interes'=>array('index'),
	$model->id_tema=>array('view','id'=>$model->id_tema),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Tema de Interes', 'url'=>array('index')),
	array('label'=>'Crear Tema de Interes', 'url'=>array('create')),
	array('label'=>'Vista Tema de Interes', 'url'=>array('view', 'id'=>$model->id_tema)),
	array('label'=>'Administrar Tema de Interes', 'url'=>array('admin')),
);
?>

<h1>Modificar Tema de Interes <?php echo $model->id_tema; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>