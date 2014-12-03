<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ModuloOperacioness',
);

$this->menu=array(
	array('label'=>'Create ModuloOperaciones', 'url'=>array('create')),
	array('label'=>'Manage ModuloOperaciones', 'url'=>array('admin')),
);
?>

<h1>ModuloOperacioness</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
