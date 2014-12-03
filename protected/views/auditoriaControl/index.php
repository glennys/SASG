<?php
/* @var $this AuditoriaControlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auditoria Controls',
);

$this->menu=array(
	array('label'=>'Create AuditoriaControl', 'url'=>array('create')),
	array('label'=>'Manage AuditoriaControl', 'url'=>array('admin')),
);
?>

<h1>Auditoria Controls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
