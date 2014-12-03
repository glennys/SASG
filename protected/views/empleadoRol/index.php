<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EmpleadoRol',
);

$this->menu=array(
	array('label'=>'Create EmpleadoRol', 'url'=>array('create')),
	array('label'=>'Manage EmpleadoRol', 'url'=>array('admin')),
);
?>

<h1>EmpleadoRol</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
