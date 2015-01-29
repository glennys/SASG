<?php
/* @var $this SubgrupoController */
/* @var $model Subgrupo */

$this->breadcrumbs=array(
	'Subgrupos'=>array('index'),
	$model->id_subgrupo=>array('view','id'=>$model->id_subgrupo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subgrupo', 'url'=>array('index')),
	array('label'=>'Create Subgrupo', 'url'=>array('create')),
	array('label'=>'View Subgrupo', 'url'=>array('view', 'id'=>$model->id_subgrupo)),
	array('label'=>'Manage Subgrupo', 'url'=>array('admin')),
);
?>

<h1>Update Subgrupo <?php echo $model->id_subgrupo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>