<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observaciones'=>$data->id_observaciones, 'id_auditor'=>$data->id_auditor, 'fecha_asignacion'=>$data->fecha_asignacion)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Auditor')); ?>:</b>
	<?php echo CHtml::encode($data->id_auditor); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Asignación')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Otro')); ?>:</b>
	<?php echo CHtml::encode($data->otro); ?><br />
</div>
