<?php
/* @var $this AdjuntosInformeController */
/* @var $model AdjuntosInforme */

$this->breadcrumbs=array(
	'Adjuntos Informes'=>array('index'),
	$model->id_adjunto=>array('view','id'=>$model->id_adjunto),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdjuntosInforme', 'url'=>array('index')),
	array('label'=>'Create AdjuntosInforme', 'url'=>array('create')),
	array('label'=>'View AdjuntosInforme', 'url'=>array('view', 'id'=>$model->id_adjunto)),
	array('label'=>'Manage AdjuntosInforme', 'url'=>array('admin')),
);
?>

<h1>Update AdjuntosInforme <?php echo $model->id_adjunto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>