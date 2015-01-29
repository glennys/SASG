<?php
/* @var $this ObservacionesAuditorController */
/* @var $model ObservacionesAuditor */

$this->breadcrumbs=array(
	'Observaciones Auditors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObservacionesAuditor', 'url'=>array('index')),
	array('label'=>'Manage ObservacionesAuditor', 'url'=>array('admin')),
);
?>

<h1>Create ObservacionesAuditor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>