<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->id_rol=>array('view','id'=>$model->id_rol),
	'modificar',
);

$this->menu=array(
	array('label'=>'Listar Rol', 'url'=>array('index')),
	array('label'=>'Crear Rol', 'url'=>array('create')),
	array('label'=>'Vista Rol', 'url'=>array('view', 'id'=>$model->id_rol)),
	array('label'=>'Administrar Rol', 'url'=>array('admin')),
);
?>

<h1>modificar Rol <?php echo $model->id_rol; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>