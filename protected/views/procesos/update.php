<?php
/* @var $this ProcesosController */
/* @var $model Procesos */

$this->breadcrumbs=array(
	'Procesoses'=>array('index'),
	$model->id_proceso=>array('view','id'=>$model->id_proceso),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Procesos', 'url'=>array('index')),
	array('label'=>'Crear Procesos', 'url'=>array('create')),
	array('label'=>'Vista Procesos', 'url'=>array('view', 'id'=>$model->id_proceso)),
	array('label'=>'Administrar Procesos', 'url'=>array('admin')),
);
?>

<h1>Modificar Procesos <?php echo $model->id_proceso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>