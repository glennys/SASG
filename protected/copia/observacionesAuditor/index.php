<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Auditor',
);

$this->menu=array(
	array('label'=>'Crear Observaciones Auditor', 'url'=>array('create')),
	array('label'=>'Administrar Observaciones Auditor', 'url'=>array('admin')),
);
?>

<h1>Observaciones Auditor</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
