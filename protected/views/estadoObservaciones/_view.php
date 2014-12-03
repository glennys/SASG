<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_proceso'=>$data->id_proceso, 'id_observaciones'=>$data->id_observaciones)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_proceso')); ?>:</b>
	<?php echo CHtml::encode($data->id_proceso); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_asignacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?><br />
</div>
