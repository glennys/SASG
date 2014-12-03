<?php
/* @var $this AdjuntoNaturalezaController */
/* @var $model AdjuntoNaturaleza */

$this->breadcrumbs=array(
	'Adjunto Naturalezas'=>array('index'),
	$model->id_adjunto_naturaleza=>array('view','id'=>$model->id_adjunto_naturaleza),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdjuntoNaturaleza', 'url'=>array('index')),
	array('label'=>'Create AdjuntoNaturaleza', 'url'=>array('create')),
	array('label'=>'View AdjuntoNaturaleza', 'url'=>array('view', 'id'=>$model->id_adjunto_naturaleza)),
	array('label'=>'Manage AdjuntoNaturaleza', 'url'=>array('admin')),
);
?>

<h1>Update AdjuntoNaturaleza <?php echo $model->id_adjunto_naturaleza; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>