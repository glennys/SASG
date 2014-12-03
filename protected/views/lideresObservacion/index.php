<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LideresObservacions',
);

$this->menu=array(
	array('label'=>'Create LideresObservacion', 'url'=>array('create')),
	array('label'=>'Manage LideresObservacion', 'url'=>array('admin')),
);
?>

<h1>LideresObservacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
