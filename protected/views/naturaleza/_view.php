//<?php
/* @var $this NaturalezaController */
/* @var $data Naturaleza */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_naturaleza')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_naturaleza), array('view', 'id'=>$data->id_naturaleza)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_naturaleza')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_naturaleza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	


</div>