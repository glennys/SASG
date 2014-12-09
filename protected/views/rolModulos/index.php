<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol Moduloss',
);

$this->menu=array(
	array('label'=>'Crear Rol Modulos', 'url'=>array('create')),
	array('label'=>'Administrar Rol Modulos', 'url'=>array('admin')),
);
?>

<h1>Rol Moduloss</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
