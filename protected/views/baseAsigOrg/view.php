<?php
/* @var $this AsigOrgController */
/* @var $model AsigOrg */

$this->breadcrumbs=array(
	'Ubicacion Organizativa'=>array('index'),
	$model->co_asig_org,
);

$this->menu=array(
	//array('label'=>'List AsigOrg', 'url'=>array('index')),
	//array('label'=>'Create AsigOrg', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_asig_org)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_asig_org),'confirm'=>'Seguro que desea eliminar este registro?')),
	//array('label'=>'Manage AsigOrg', 'url'=>array('admin')),
    array('label'=>'Detalle Empleado', 'url'=>array('/baseEmpleados/view&id='.$model->nuDocmIdnt->nu_docm_idnt)),
);
?>

<h1>Ubicacion Organizativa #<?php echo $model->co_asig_org; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_asig_org',
		//'co_asig_org',
        'nu_docm_idnt',
        'nuDocmIdnt.nb_pers',
        //'co_org',
        array ('name'=>'Ubicacion Organizativa','value'=>$model->coOrg->nb_org,'type'=>'text',),
        'fe_crea',
        'fe_modf',
        'usr_crea',
        'usr_modf',
        'in_stat',
        'tx_desc',
	),
)); ?>
