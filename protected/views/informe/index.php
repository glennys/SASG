<?php
/* @var $this InformeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informes',
);

$this->menu=array(
	array('label'=>'Create Informe', 'url'=>array('create')),
	array('label'=>'Manage Informe', 'url'=>array('admin')),
);
?>

<h1>Informes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
