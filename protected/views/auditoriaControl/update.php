<?php
/* @var $this AuditoriaControlController */
/* @var $model AuditoriaControl */

$this->breadcrumbs=array(
	'Auditoria Controls'=>array('index'),
	$model->id_auditoria_control=>array('view','id'=>$model->id_auditoria_control),
	'Update',
);

$this->menu=array(
	array('label'=>'List AuditoriaControl', 'url'=>array('index')),
	array('label'=>'Create AuditoriaControl', 'url'=>array('create')),
	array('label'=>'View AuditoriaControl', 'url'=>array('view', 'id'=>$model->id_auditoria_control)),
	array('label'=>'Manage AuditoriaControl', 'url'=>array('admin')),
);
?>

<h1>Update AuditoriaControl <?php echo $model->id_auditoria_control; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>