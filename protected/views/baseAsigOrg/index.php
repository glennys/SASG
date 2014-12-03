<?php
/* @var $this AsigOrgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asig Orgs',
);

$this->menu=array(
	array('label'=>'Create AsigOrg', 'url'=>array('create')),
	array('label'=>'Manage AsigOrg', 'url'=>array('admin')),
);
?>

<h1>Asig Orgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
