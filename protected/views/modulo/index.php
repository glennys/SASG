<?php
/* @var $this ModuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Modulos',
);

$this->menu=array(
	array('label'=>'Create Modulo', 'url'=>array('create')),
	array('label'=>'Manage Modulo', 'url'=>array('admin')),
);
?>

<h1>Modulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
