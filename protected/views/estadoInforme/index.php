<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Informes',
);

$this->menu=array(
	array('label'=>'Crear EstadoInforme', 'url'=>array('create')),
	array('label'=>'Administrar Estado Informe', 'url'=>array('admin')),
);
?>

<h1>Estado Informes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
