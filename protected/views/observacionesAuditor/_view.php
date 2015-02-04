<?php
/* @var $this ObservacionesAuditorController */
/* @var $data ObservacionesAuditor */
?>

<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_auditor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_auditor), array('view', 'id'=>$data->id_auditor)); ?>
	<br />
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_asignacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otro')); ?>:</b>
	<?php echo CHtml::encode($data->otro); ?>
	<br />

</div>