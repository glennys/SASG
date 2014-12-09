<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Consultor',
);

$this->menu=array(
	array('label'=>'Crear Observaciones Consultor', 'url'=>array('create')),
	array('label'=>'Administrar Observaciones Consultor', 'url'=>array('admin')),
);
?>

<h1>Observaciones Consultors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
