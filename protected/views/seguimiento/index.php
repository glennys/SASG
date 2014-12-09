<?php
/* @var $this SeguimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seguimientos',
);

$this->menu=array(
	array('label'=>'Crear Seguimiento', 'url'=>array('create')),
	array('label'=>'Administrar Seguimiento', 'url'=>array('admin')),
);
?>

<h1>Seguimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
