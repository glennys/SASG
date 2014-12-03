<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Organizacion'=>array('index'),
	$model->co_org=>array('view','id'=>$model->co_org),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_org)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Organizacion <?php echo $model->co_org; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>