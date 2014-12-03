<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LiderObservacionHistorials',
);

$this->menu=array(
	array('label'=>'Create LiderObservacionHistorial', 'url'=>array('create')),
	array('label'=>'Manage LiderObservacionHistorial', 'url'=>array('admin')),
);
?>

<h1>LiderObservacionHistorials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
