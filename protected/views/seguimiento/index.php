<?php
/* @var $this SeguimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seguimientos',
);

$this->menu=array(
	array('label'=>'Create Seguimiento', 'url'=>array('create')),
	array('label'=>'Manage Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Seguimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
