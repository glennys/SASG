<?php
/* @var $this AuditoriaControlController */
/* @var $data AuditoriaControl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_auditoria_control')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_auditoria_control), array('view', 'id'=>$data->id_auditoria_control)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modulo')); ?>:</b>
	<?php echo CHtml::encode($data->modulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metodo')); ?>:</b>
	<?php echo CHtml::encode($data->metodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_ip')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />


</div>