<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observacion'=>$data->id_observacion, 'id_unidad'=>$data->id_unidad)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_observacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado_supervisor')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado_supervisor); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('aprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->aprobacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_asignacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?><br />
</div>
