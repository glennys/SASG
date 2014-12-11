<?php
/* @var $this TipoCriticidadController */
/* @var $data TipoCriticidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_criticidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_criticidad), array('view', 'id'=>$data->id_tipo_criticidad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripción')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />
		


</div>