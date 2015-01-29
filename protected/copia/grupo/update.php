<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */

$this->breadcrumbs=array(
	'Grupo'=>array('index'),
	$model->id_grupo=>array('view','id'=>$model->id_grupo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Grupo', 'url'=>array('index')),
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Vista Grupo', 'url'=>array('view', 'id'=>$model->id_grupo)),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

<h1>Modificar Grupo <?php echo $model->id_grupo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>