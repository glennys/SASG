<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_permisos'=>$data->id_permisos, 'id_rol'=>$data->id_rol)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Rol')); ?>:</b>
	<?php echo CHtml::encode($data->id_rol); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Permisos')); ?>:</b>
	<?php echo CHtml::encode($data->id_permisos); ?><br />
</div>
