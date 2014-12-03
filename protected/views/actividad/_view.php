<?php
/* @var $this ActividadController */
/* @var $data Actividad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_actividad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_actividad), array('view', 'id'=>$data->id_actividad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_actividad')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cerrada')); ?>:</b>
	<?php echo CHtml::encode($data->cerrada); ?>
	<br />

	*/ ?>

</div>