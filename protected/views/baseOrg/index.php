<?php
/* @var $this OrgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organizacion',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Listar de Organizaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
