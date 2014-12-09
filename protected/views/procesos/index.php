<?php
/* @var $this ProcesosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Procesos',
);

$this->menu=array(
	array('label'=>'Crear Procesos', 'url'=>array('create')),
	array('label'=>'Administrar Procesos', 'url'=>array('admin')),
);
?>

<h1>Procesos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
