<?php
/* @var $this InformeController */
/* @var $data Informe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_informe), array('view', 'id'=>$data->id_informe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_auditoria')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoAuditoria->descripcion); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('id_estado')); ?></b>
	<?php // echo CHtml::encode($data->idEstado->descripcion); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?></b>
	<?php // echo CHtml::encode($data->fecha_creacion); ?>
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_periodo_auditoria')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_periodo_auditoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cerrada')); ?>:</b>
	<?php echo CHtml::encode($data->cerrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
	<?php echo CHtml::encode($data->propietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_emision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_emision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	

</div>