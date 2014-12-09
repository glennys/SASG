<?php
/* @var $this OperacionesController */
/* @var $data Operaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_operaciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_operaciones), array('view', 'id'=>$data->id_operaciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	
	


</div>