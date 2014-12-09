<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Módulo Operacioness',
);

$this->menu=array(
	array('label'=>'Create Módulo Operaciones', 'url'=>array('create')),
	array('label'=>'Manage Módulo Operaciones', 'url'=>array('admin')),
);
?>

<h1>Módulo Operacioness</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
