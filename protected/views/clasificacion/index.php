<?php
/* @var $this ClasificacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clasificación',
);

$this->menu=array(
	array('label'=>'Crear Clasificación', 'url'=>array('create')),
	array('label'=>'Administrar Clasificación', 'url'=>array('admin')),
);
?>

<h1>Clasificación</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
