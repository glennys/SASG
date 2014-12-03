<?php
/* @var $this AsigOrgController */
/* @var $model AsigOrg */

$this->breadcrumbs=array(
	'Ubicacion Organizativa'=>array('index'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List AsigOrg', 'url'=>array('index')),
	//array('label'=>'Manage AsigOrg', 'url'=>array('admin')),
);
?>

<h1>Crear Ubicacion Organizativa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>