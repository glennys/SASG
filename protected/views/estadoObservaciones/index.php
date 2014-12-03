<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoObservacioness',
);

$this->menu=array(
	array('label'=>'Create EstadoObservaciones', 'url'=>array('create')),
	array('label'=>'Manage EstadoObservaciones', 'url'=>array('admin')),
);
?>

<h1>EstadoObservacioness</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
