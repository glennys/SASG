<?php
/* @var $this AdjuntoNaturalezaController */
/* @var $data AdjuntoNaturaleza */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_adjunto_naturaleza')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adjunto_naturaleza), array('view', 'id'=>$data->id_adjunto_naturaleza)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjunto')); ?>:</b>
	<?php echo CHtml::encode($data->adjunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>