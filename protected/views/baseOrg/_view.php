<?php
/* @var $this OrgController */
/* @var $data Org */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_org')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_org), array('view', 'id'=>$data->co_org)); ?>
	<br />

        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_org')); ?>:</b>
	<?php echo CHtml::encode($data->id_org); ?>
	<br />
        */ ?>
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('co_org_dpnd')); ?>:</b>
	<?php echo CHtml::encode($data->co_org_dpnd); ?>
        <?php //echo CHtml::encode($data->orgs->nb_org); ?>
        <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_org')); ?>:</b>
	<?php echo CHtml::encode($data->nb_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->tx_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abv_org')); ?>:</b>
	<?php echo CHtml::encode($data->abv_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<?php /*
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