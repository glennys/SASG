<?php
/* @var $this AdjuntoSeguimientoObservacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adjunto Seguimiento Observacions',
);

$this->menu=array(
	array('label'=>'Create AdjuntoSeguimientoObservacion', 'url'=>array('create')),
	array('label'=>'Manage AdjuntoSeguimientoObservacion', 'url'=>array('admin')),
);
?>

<h1>Adjunto Seguimiento Observacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
