<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'auditoriampleadoRols',
);

$this->menu=array(
	array('label'=>'Create auditoriampleadoRol', 'url'=>array('create')),
	array('label'=>'Manage auditoriampleadoRol', 'url'=>array('admin')),
);
?>

<h1>auditoriampleadoRols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
