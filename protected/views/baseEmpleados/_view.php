<?php
/* @var $this EmpleadosController */
/* @var $data Empleados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_docm_idnt')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_docm_idnt), array('view', 'id'=>$data->nu_docm_idnt)); ?>
	<br />

<?php /*	
 *      <b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />
*/ ?> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_docm_idnt_supv')); ?>:</b>
	<?php echo CHtml::encode($data->nu_docm_idnt_supv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_pers')); ?>:</b>
	<?php echo CHtml::encode($data->nb_pers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ldap_login')); ?>:</b>
	<?php echo CHtml::encode($data->ldap_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
	<?php echo CHtml::encode($data->usr_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
	<?php echo CHtml::encode($data->usr_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_desc')); ?>:</b>
	<?php echo CHtml::encode($data->tx_desc); ?>
	<br />

	*/ ?>

</div>