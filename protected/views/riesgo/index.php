<?php
/* @var $this RiesgoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Riesgo',
);

$this->menu=array(
	array('label'=>'Crear Riesgo', 'url'=>array('create')),
	array('label'=>'Administrar Riesgo', 'url'=>array('admin')),
);
?>

<h1>Riesgo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
