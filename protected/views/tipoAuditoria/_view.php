<?php
/* @var $this TipoAuditoriaController */
/* @var $data TipoAuditoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_auditoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_auditoria), array('view', 'id'=>$data->id_tipo_auditoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abreviatura_tipo_auditoria')); ?>:</b>
	<?php echo CHtml::encode($data->abreviatura_tipo_auditoria); ?>
	<br />
		<?php/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />*/?>


</div>