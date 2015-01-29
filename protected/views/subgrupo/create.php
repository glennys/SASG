<?php
/* @var $this SubgrupoController */
/* @var $model Subgrupo */

$this->breadcrumbs=array(
	'Subgrupos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subgrupo', 'url'=>array('index')),
	array('label'=>'Manage Subgrupo', 'url'=>array('admin')),
);
?>

<h1>Create Subgrupo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>