<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observacion'=>$data->id_observacion, 'id_supervisor'=>$data->id_supervisor, 'fecha_asignacion'=>$data->fecha_asignacion)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_observacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_supervisor')); ?>:</b>
	<?php echo CHtml::encode($data->id_supervisor); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_asignacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('otro')); ?>:</b>
	<?php echo CHtml::encode($data->otro); ?><br />
</div>
