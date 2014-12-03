<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id_informe=>array('view','id'=>$model->id_informe),
	'Update',
);

$this->menu=array(
	array('label'=>'List Informe', 'url'=>array('index')),
	array('label'=>'Create Informe', 'url'=>array('create')),
	array('label'=>'View Informe', 'url'=>array('view', 'id'=>$model->id_informe)),
	array('label'=>'Manage Informe', 'url'=>array('admin')),
);
?>

<h1>Update Informe <?php echo $model->id_informe; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>