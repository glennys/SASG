<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ObservacionesConsultors',
);

$this->menu=array(
	array('label'=>'Create ObservacionesConsultor', 'url'=>array('create')),
	array('label'=>'Manage ObservacionesConsultor', 'url'=>array('admin')),
);
?>

<h1>ObservacionesConsultors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
