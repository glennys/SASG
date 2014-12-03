<?php
/* @var $this AdjuntoNaturalezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adjunto Naturalezas',
);

$this->menu=array(
	array('label'=>'Create AdjuntoNaturaleza', 'url'=>array('create')),
	array('label'=>'Manage AdjuntoNaturaleza', 'url'=>array('admin')),
);
?>

<h1>Adjunto Naturalezas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
