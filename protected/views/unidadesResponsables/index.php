<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless',
);

$this->menu=array(
	array('label'=>'Create UnidadesResponsables', 'url'=>array('create')),
	array('label'=>'Manage UnidadesResponsables', 'url'=>array('admin')),
);
?>

<h1>UnidadesResponsabless</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
