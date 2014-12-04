<?php
/* @var $this ModuloController */
/* @var $data Modulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_permisos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_permisos), array('view', 'id'=>$data->id_permisos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_modulo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_modulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_permisos')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_permisos); ?>
	<br />
	
	

</div>