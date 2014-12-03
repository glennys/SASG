<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesUnidadConsultors',
);

$this->menu=array(
	array('label'=>'Create ObservacionesUnidadConsultor', 'url'=>array('create')),
	array('label'=>'Manage ObservacionesUnidadConsultor', 'url'=>array('admin')),
);
?>

<h1>ObservacionesUnidadConsultors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
