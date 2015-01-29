<?php
/* @var $this ObservacionesAuditorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Observaciones Auditors',
);

$this->menu=array(
	array('label'=>'Create ObservacionesAuditor', 'url'=>array('create')),
	array('label'=>'Manage ObservacionesAuditor', 'url'=>array('admin')),
);
?>

<h1>Observaciones Auditors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
