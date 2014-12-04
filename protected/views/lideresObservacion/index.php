<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lideres Observación',
);

$this->menu=array(
	array('label'=>'Crear Lideres Observación', 'url'=>array('create')),
	array('label'=>'Administrar Lideres Observación', 'url'=>array('admin')),
);
?>

<h1>Lideres Observación</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
