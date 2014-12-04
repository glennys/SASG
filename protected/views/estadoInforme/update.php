<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoInformes'=>array('index'),
	'Vista'=>array('view', 'id_estado'=>$model->id_estado, 'id_informe'=>$model->id_informe),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Estado Informe', 'url'=>array('index')),
	array('label'=>'Crear Estado Informe', 'url'=>array('create')),
	array('label'=>'Vista Estado Informe', 'url'=>array('view', 'id_estado'=>$model->id_estado, 'id_informe'=>$model->id_informe)),
	array('label'=>'Administrar Estado Informe', 'url'=>array('admin')),
); 
?>

<h1>Modificar Estado Informe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
