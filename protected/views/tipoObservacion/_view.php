<?php
/* @var $this TipoObservacionController */
/* @var $data TipoObservacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo), array('view', 'id'=>$data->id_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripción')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	

</div>