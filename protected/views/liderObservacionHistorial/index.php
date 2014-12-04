<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Historial Lider',
);

$this->menu=array(
	array('label'=>'Crear Historial Lider', 'url'=>array('create')),
	array('label'=>'Administrar Historial Lider', 'url'=>array('admin')),
);
?>

<h1>Historial Lider</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
