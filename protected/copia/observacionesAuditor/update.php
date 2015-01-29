Auditor<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Observaciones Auditor'=>array('index'),
	'Vista'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_auditor'=>$model->id_auditor, 'fecha_asignacion'=>$model->fecha_asignacion),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Auditor', 'url'=>array('index')),
	array('label'=>'Creaar Auditor', 'url'=>array('create')),
	array('label'=>'Vista  Auditor', 'url'=>array('view', 'id_observaciones'=>$model->id_observaciones, 'id_auditor'=>$model->id_auditor, 'fecha_asignacion'=>$model->fecha_asignacion)),
	array('label'=>'Administrar Auditor', 'url'=>array('admin')),
); 
?>

<h1>Modificar Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
