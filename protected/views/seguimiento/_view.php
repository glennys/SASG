<?php
/* @var $this SeguimientoController */
/* @var $data Seguimiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Adjunto Seguimiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adjunto_seguimiento), array('view', 'id'=>$data->id_adjunto_seguimiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Actividad')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripción')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Adjunto')); ?>:</b>
	<?php echo CHtml::encode($data->adjunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Modificación')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>