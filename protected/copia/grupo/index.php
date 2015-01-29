<?php
/* @var $this NaturalezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupo',
);

$this->menu=array(
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

<h1>Grupo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
