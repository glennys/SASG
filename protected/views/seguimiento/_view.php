<?php
/* @var $this SeguimientoController */
/* @var $data Seguimiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_adjunto_seguimiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adjunto_seguimiento), array('view', 'id'=>$data->id_adjunto_seguimiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_actividad')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjunto')); ?>:</b>
	<?php echo CHtml::encode($data->adjunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>