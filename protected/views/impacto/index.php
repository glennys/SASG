<?php
/* @var $this ImpactoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Impactos',
);

$this->menu=array(
	array('label'=>'Crear Impacto', 'url'=>array('create')),
	array('label'=>'Administrar Impactos', 'url'=>array('admin')),
);
?>

<h1>Impactos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
