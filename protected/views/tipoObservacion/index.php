<?php
/* @var $this TipoObservacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Observaciones',
);

$this->menu=array(
	array('label'=>'Crear Tipo Observación', 'url'=>array('create')),
	array('label'=>'Aministrar Tipo Observación', 'url'=>array('admin')),
);
?>

<h1>Tipo Observacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
