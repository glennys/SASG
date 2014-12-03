<?php
/* @var $this AsigOrgController */
/* @var $model AsigOrg */

$this->breadcrumbs=array(
	'Ubicacion Organizativa'=>array('index'),
	$model->co_asig_org=>array('view','id'=>$model->co_asig_org),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List AsigOrg', 'url'=>array('index')),
	//array('label'=>'Create AsigOrg', 'url'=>array('create')),
	array('label'=>'Ver Ubic. Organizativa', 'url'=>array('view', 'id'=>$model->co_asig_org)),
	//array('label'=>'Manage AsigOrg', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ubicación Organizativa <?php echo $model->co_asig_org; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>