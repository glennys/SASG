<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->id_permisos=>array('view','id'=>$model->id_permisos),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Módulo', 'url'=>array('index')),
	array('label'=>'Crear Módulo', 'url'=>array('create')),
	array('label'=>'Vista Módulo', 'url'=>array('view', 'id'=>$model->id_permisos)),
	array('label'=>'Administrar Módulo', 'url'=>array('admin')),
);
?>

<h1>Modificar Módulo <?php echo $model->id_permisos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>