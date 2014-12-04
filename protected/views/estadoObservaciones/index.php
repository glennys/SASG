<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Observacioness',
);

$this->menu=array(
	array('label'=>'Crear Estado Observaciones', 'url'=>array('create')),
	array('label'=>'Administrar Estado Observaciones', 'url'=>array('admin')),
);
?>

<h1>Estado Observacioness</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
