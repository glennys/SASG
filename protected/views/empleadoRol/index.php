<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol empleado',
);

$this->menu=array(
	array('label'=>'Crear Rol empleado', 'url'=>array('create')),
	array('label'=>'Administrar Rol empleado', 'url'=>array('admin')),
);
?>

<h1>Rol empleado</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
