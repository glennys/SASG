<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_empleado), array('view', 'id'=>$data->id_empleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerapellido_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->primerapellido_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoapellido_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->segundoapellido_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrecompleto_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->nombrecompleto_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->email_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->password_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perfilsap_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->perfilsap_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coord_gcia_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->coord_gcia_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->extension_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->celular_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supervisor_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->supervisor_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poo')); ?>:</b>
	<?php echo CHtml::encode($data->poo); ?>
	<br />

	
</div>