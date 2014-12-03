<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_operaciones'=>$data->id_operaciones, 'id_permisos'=>$data->id_permisos)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_permisos')); ?>:</b>
	<?php echo CHtml::encode($data->id_permisos); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_operaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_operaciones); ?><br />
</div>
