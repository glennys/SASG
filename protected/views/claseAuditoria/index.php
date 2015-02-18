<?php
/* @var $this ClaseAuditoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clase Auditorias',
);

$this->menu=array(
	array('label'=>'Create ClaseAuditoria', 'url'=>array('create')),
	array('label'=>'Manage ClaseAuditoria', 'url'=>array('admin')),
);
?>

<h1>Clase Auditorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
