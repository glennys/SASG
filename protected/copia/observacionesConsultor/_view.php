<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observaciones'=>$data->id_observaciones, 'id_consultor'=>$data->id_consultor, 'fecha_asignacion'=>$data->fecha_asignacion)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Consultor')); ?>:</b>
	<?php echo CHtml::encode($data->id_consultor); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Asignación')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_asignacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Otro')); ?>:</b>
	<?php echo CHtml::encode($data->otro); ?><br />
</div>
