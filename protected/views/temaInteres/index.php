<?php
/* @var $this TemaInteresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tema de Interes',
);

$this->menu=array(
	array('label'=>'Crear Tema de Interes', 'url'=>array('create')),
	array('label'=>'Administrar Tema de Interes', 'url'=>array('admin')),
);
?>

<h1>Tema Interes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
