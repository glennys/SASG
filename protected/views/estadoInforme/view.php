<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Informes'=>array('index'),
	'Vista',
);

$this->menu=array(
	array('label'=>'Listar EstadoInforme', 'url'=>array('index')),
	array('label'=>'Crear EstadoInforme', 'url'=>array('create')),
	array('label'=>'Modificar EstadoInforme', 'url'=>array('update', 'id_estado'=>$model->id_estado, 'id_informe'=>$model->id_informe)),
	array('label'=>'Eliminar EstadoInforme', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_estado'=>$model->id_estado, 'id_informe'=>$model->id_informe),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoInforme', 'url'=>array('admin')),
);
?>

<h1>Vista Estado Informe</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estado',
		'id_informe',
		'fecha_modificacion',
	),
)); ?>
