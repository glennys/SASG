<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'NaturalezaObservacions',
);

$this->menu=array(
	array('label'=>'Create NaturalezaObservacion', 'url'=>array('create')),
	array('label'=>'Manage NaturalezaObservacion', 'url'=>array('admin')),
);
?>

<h1>NaturalezaObservacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
