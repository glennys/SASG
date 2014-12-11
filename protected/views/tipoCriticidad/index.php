<?php
/* @var $this TipoCriticidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Criticidads',
);

$this->menu=array(
	array('label'=>'Crear Tipo Criticidad', 'url'=>array('create')),
	array('label'=>'Administrar Tipo Criticidad', 'url'=>array('admin')),
);
?>

<h1>Tipo Criticidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
