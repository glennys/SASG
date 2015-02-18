<?php
/* @var $this ClaseAuditoriaController */
/* @var $model ClaseAuditoria */

$this->breadcrumbs=array(
	'Clase Auditorias'=>array('index'),
	$model->id_clase_auditoria=>array('view','id'=>$model->id_clase_auditoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClaseAuditoria', 'url'=>array('index')),
	array('label'=>'Create ClaseAuditoria', 'url'=>array('create')),
	array('label'=>'View ClaseAuditoria', 'url'=>array('view', 'id'=>$model->id_clase_auditoria)),
	array('label'=>'Manage ClaseAuditoria', 'url'=>array('admin')),
);
?>

<h1>Update ClaseAuditoria <?php echo $model->id_clase_auditoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>