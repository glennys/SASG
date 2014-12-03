<?php
/* @var $this OperacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Operaciones',
);

$this->menu=array(
	array('label'=>'Create Operaciones', 'url'=>array('create')),
	array('label'=>'Manage Operaciones', 'url'=>array('admin')),
);
?>

<h1>Operaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
