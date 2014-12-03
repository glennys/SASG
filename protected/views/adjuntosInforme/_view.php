<?php
/* @var $this AdjuntosInformeController */
/* @var $data AdjuntosInforme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_adjunto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adjunto), array('view', 'id'=>$data->id_adjunto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_informe); ?>
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