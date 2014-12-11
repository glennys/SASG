<?php
/* @var $this UnidadController */
/* @var $data Unidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_unidad), array('view', 'id'=>$data->id_unidad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden')); ?>:</b>
	<?php echo CHtml::encode($data->orden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_supervisor_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_supervisor_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension_supervisor_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->extension_supervisor_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_supervisor_ldap')); ?>:</b>
	<?php echo CHtml::encode($data->celular_supervisor_ldap); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_unidad_ldap')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_unidad_ldap); ?>
	<br />
	 

</div>