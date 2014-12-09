<?php
/* @var $this RolController */
/* @var $data Rol */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_rol')); ?></b>
	<?php //echo CHtml::link(CHtml::encode($data->id_rol), array('view', 'id'=>$data->id_rol)); ?>
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_rol')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	
</div>