<?php
/* @var $this TipoCriticidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Criticidads',
);

$this->menu=array(
	array('label'=>'Crear Criticidad', 'url'=>array('create')),
	array('label'=>'Administrar Criticidad', 'url'=>array('admin')),
);
?>

<h1>Criticidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
