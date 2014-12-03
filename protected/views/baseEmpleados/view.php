<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->nu_docm_idnt,
);

if ( !is_array($model->AsigOrgs) || empty($model->AsigOrgs) ) {
    $sumintEstOrg = array (
       '/baseAsigOrg/create','nu_docm_idnt'=>$model->nu_docm_idnt
    );
}else{
    $sumintEstOrg = array (
       '/baseAsigOrg/view','id'=>$model->AsigOrgs[0]->co_asig_org
    );
}


$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->nu_docm_idnt)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_docm_idnt),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
        
        array('label'=>'Ubicación Organizativa', 'url'=>'#', 'linkOptions'=>array('submit'=>$sumintEstOrg)),
        
);
?>

<h1>Empleado #<?php echo $model->nu_docm_idnt; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_usuario',
		'nu_docm_idnt',
		'nu_docm_idnt_supv',
		'username',
		'nb_pers',
		'email',
		'ldap_login',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
