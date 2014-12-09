<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observaciones'=>$data->id_observaciones, 'id_unidades'=>$data->id_unidades)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Unidades')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidades); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Empleado Consultor')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado_consultor); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Plan General')); ?>:</b>
	<?php echo CHtml::encode($data->plan_general); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Asignación')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?><br />
</div>
