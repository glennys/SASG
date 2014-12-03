<?php
/* @var $this AdjuntosInformeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adjuntos Informes',
);

$this->menu=array(
	array('label'=>'Create AdjuntosInforme', 'url'=>array('create')),
	array('label'=>'Manage AdjuntosInforme', 'url'=>array('admin')),
);
?>

<h1>Adjuntos Informes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
