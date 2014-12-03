<?php
/* @var $this ProcesosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Procesoses',
);

$this->menu=array(
	array('label'=>'Create Procesos', 'url'=>array('create')),
	array('label'=>'Manage Procesos', 'url'=>array('admin')),
);
?>

<h1>Procesoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
