<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Oganizacion'=>array('index'),
	$model->co_org,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_org)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_org),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Organizacion #<?php echo $model->co_org; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_org',
		'co_org',
		'coOrgDpnd.nb_org:text:Organización padre',
                //array ('name'=>'co_org_dpnd','value'=>'$data->coOrgDpnd.nb_org','type'=>'text'),
		'nb_org',
		'tx_descripcion',
        'ceco',
		'abv_org',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); 

?>
