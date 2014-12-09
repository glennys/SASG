<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Naturaleza Observación',
);

$this->menu=array(
	array('label'=>'Create Naturaleza Observación', 'url'=>array('create')),
	array('label'=>'Administrar Naturaleza Observación', 'url'=>array('admin')),
);
?>

<h1>Naturaleza Observación</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
