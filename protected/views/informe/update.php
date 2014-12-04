<?php
/* @var $this InformeController */
/* @var $model Informe */

$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id_informe=>array('view','id'=>$model->id_informe),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Informe', 'url'=>array('index')),
	array('label'=>'Crear Informe', 'url'=>array('create')),
	array('label'=>'Vista Informe', 'url'=>array('view', 'id'=>$model->id_informe)),
	array('label'=>'Administrar Informe', 'url'=>array('admin')),
);
?>

<h1>Modificar Informe <?php echo $model->id_informe; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>