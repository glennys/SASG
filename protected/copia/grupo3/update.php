<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id_grupo=>array('view','id'=>$model->id_grupo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grupo', 'url'=>array('index')),
	array('label'=>'Create Grupo', 'url'=>array('create')),
	array('label'=>'View Grupo', 'url'=>array('view', 'id'=>$model->id_grupo)),
	array('label'=>'Manage Grupo', 'url'=>array('admin')),
);
?>

<h1>Update Grupo <?php echo $model->id_grupo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>