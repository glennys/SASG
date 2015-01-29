<?php
/* @var $this ObservacionesAuditorController */
/* @var $model ObservacionesAuditor */

$this->breadcrumbs=array(
	'Observaciones Auditors'=>array('index'),
	$model->id_auditor=>array('view','id'=>$model->id_auditor),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObservacionesAuditor', 'url'=>array('index')),
	array('label'=>'Create ObservacionesAuditor', 'url'=>array('create')),
	array('label'=>'View ObservacionesAuditor', 'url'=>array('view', 'id'=>$model->id_auditor)),
	array('label'=>'Manage ObservacionesAuditor', 'url'=>array('admin')),
);
?>

<h1>Update ObservacionesAuditor <?php echo $model->id_auditor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>