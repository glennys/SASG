<?php
/* @var $this TipoObservacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Observacions',
);

$this->menu=array(
	array('label'=>'Create TipoObservacion', 'url'=>array('create')),
	array('label'=>'Manage TipoObservacion', 'url'=>array('admin')),
);
?>

<h1>Tipo Observacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
