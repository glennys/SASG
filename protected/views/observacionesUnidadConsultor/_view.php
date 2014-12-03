<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observaciones'=>$data->id_observaciones, 'id_unidad'=>$data->id_unidad, 'fecha_observacion'=>$data->fecha_observacion, 'id_actividad'=>$data->id_actividad)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_observacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_observacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_actividad')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_seguimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_seguimiento); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
	<?php echo CHtml::encode($data->propietario); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('avance')); ?>:</b>
	<?php echo CHtml::encode($data->avance); ?><br />
</div>
