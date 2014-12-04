<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">

<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_empleado'=>$data->id_empleado, 'id_rol'=>$data->id_rol)); ?><br/></b>
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_rol')); ?>:</b>
	<?php echo CHtml::encode($data->id_rol); ?><br />

	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado); ?><br />
</div>



