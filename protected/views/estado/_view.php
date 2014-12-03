<?php
/* @var $this EstadoController */
/* @var $data Estado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_estado), array('view', 'id'=>$data->id_estado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notificacion')); ?>:</b>
	<?php echo CHtml::encode($data->notificacion); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php //echo CHtml::encode($data->fecha_creacion); ?>
	

	<b><?php //echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php //echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_notificacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_notificacion); ?>
	<br />


</div>