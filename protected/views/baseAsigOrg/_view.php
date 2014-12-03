<?php
/* @var $this AsigOrgController */
/* @var $data AsigOrg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_asig_org')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_asig_org), array('view', 'id'=>$data->co_asig_org)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_asig_org')); ?>:</b>
	<?php echo CHtml::encode($data->id_asig_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_docm_idnt')); ?>:</b>
	<?php echo CHtml::encode($data->nu_docm_idnt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_org')); ?>:</b>
	<?php echo CHtml::encode($data->co_org); ?>
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

	<?php /*
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