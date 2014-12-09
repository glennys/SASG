<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Naturalezas'=>array('index'),
	$model->id_naturaleza=>array('view','id'=>$model->id_naturaleza),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Naturaleza', 'url'=>array('index')),
	array('label'=>'Crear Naturaleza', 'url'=>array('create')),
	array('label'=>'Vista Naturaleza', 'url'=>array('view', 'id'=>$model->id_naturaleza)),
	array('label'=>'Administrar Naturaleza', 'url'=>array('admin')),
);
?>

<h1>Modificar Naturaleza <?php echo $model->id_naturaleza; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>