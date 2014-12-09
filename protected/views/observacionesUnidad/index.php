<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Unidad',
);

$this->menu=array(
	array('label'=>'Crear Observaciones Unidad', 'url'=>array('create')),
	array('label'=>'Administrar Observaciones Unidad', 'url'=>array('admin')),
);
?>

<h1>Observaciones Unidad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
