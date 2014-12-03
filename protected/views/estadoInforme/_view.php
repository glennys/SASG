<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_estado'=>$data->id_estado, 'id_informe'=>$data->id_informe)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_informe); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?><br />
</div>
