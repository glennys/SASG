<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Unidad Consultor',
);

$this->menu=array(
	array('label'=>'Crear Unidad Consultor', 'url'=>array('create')),
	array('label'=>'Administrar Unidad Consultor', 'url'=>array('admin')),
);
?>

<h1>Unidad Consultor</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
