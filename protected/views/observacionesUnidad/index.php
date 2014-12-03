<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidad',
);

$this->menu=array(
	array('label'=>'Create ObservacionesUnidad', 'url'=>array('create')),
	array('label'=>'Manage ObservacionesUnidad', 'url'=>array('admin')),
);
?>

<h1>ObservacionesUnidad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
