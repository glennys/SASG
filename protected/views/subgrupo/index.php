<?php
/* @var $this SubgrupoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subgrupos',
);

$this->menu=array(
	array('label'=>'Create Subgrupo', 'url'=>array('create')),
	array('label'=>'Manage Subgrupo', 'url'=>array('admin')),
);
?>

<h1>Subgrupos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
