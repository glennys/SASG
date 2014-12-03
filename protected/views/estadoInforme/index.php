<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoInformes',
);

$this->menu=array(
	array('label'=>'Create EstadoInforme', 'url'=>array('create')),
	array('label'=>'Manage EstadoInforme', 'url'=>array('admin')),
);
?>

<h1>Estado Informes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
