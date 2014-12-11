<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidads'=>array('index'),
	$model->id_unidad=>array('view','id'=>$model->id_unidad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Unidad', 'url'=>array('index')),
	array('label'=>'Crear Unidad', 'url'=>array('create')),
	array('label'=>'Vista Unidad', 'url'=>array('view', 'id'=>$model->id_unidad)),
	array('label'=>'Administar Unidad', 'url'=>array('admin')),
);
?>

<h1>Modificar Unidad <?php echo $model->id_unidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>