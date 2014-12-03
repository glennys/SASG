<?php
/* @var $this TipoAuditoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Auditorias',
);

$this->menu=array(
	array('label'=>'Create TipoAuditoria', 'url'=>array('create')),
	array('label'=>'Manage TipoAuditoria', 'url'=>array('admin')),
);
?>

<h1>Tipo Auditorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
