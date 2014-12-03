<?php
/* @var $this ActividadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actividads',
);

$this->menu=array(
	array('label'=>'Create Actividad', 'url'=>array('create')),
	array('label'=>'Manage Actividad', 'url'=>array('admin')),
);
?>

<h1>Actividads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
