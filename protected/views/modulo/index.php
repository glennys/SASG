<?php
/* @var $this ModuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Módulo',
);

$this->menu=array(
	array('label'=>'Crear Módulo', 'url'=>array('create')),
	array('label'=>'Administrar Módulo', 'url'=>array('admin')),
);
?>

<h1>Módulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
