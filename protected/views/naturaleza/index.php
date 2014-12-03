<?php
/* @var $this NaturalezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Naturalezas',
);

$this->menu=array(
	array('label'=>'Create Naturaleza', 'url'=>array('create')),
	array('label'=>'Manage Naturaleza', 'url'=>array('admin')),
);
?>

<h1>Naturalezas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
