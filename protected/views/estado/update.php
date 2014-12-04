<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->id_estado=>array('view','id'=>$model->id_estado),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Estado', 'url'=>array('index')),
	array('label'=>'Crear Estado', 'url'=>array('create')),
	array('label'=>'Vista Estado', 'url'=>array('view', 'id'=>$model->id_estado)),
	array('label'=>'Administrar Estado', 'url'=>array('admin')),
);
?>

<h1>Modificar Estado <?php echo $model->id_estado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>