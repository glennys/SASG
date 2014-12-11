<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Unidades Responsabless',
);

$this->menu=array(
	array('label'=>'Crear Unidades Responsables', 'url'=>array('create')),
	array('label'=>'Administrar Unidades Responsables', 'url'=>array('admin')),
);
?>

<h1>Unidades Responsabless</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
