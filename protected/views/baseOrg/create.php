<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Oganizacion'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Organizacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>