<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolModuloss',
);

$this->menu=array(
	array('label'=>'Create RolModulos', 'url'=>array('create')),
	array('label'=>'Manage RolModulos', 'url'=>array('admin')),
);
?>

<h1>RolModuloss</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
