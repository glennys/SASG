<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_observaciones'=>$data->id_observaciones, 'id_unidad'=>$data->id_unidad, 'fecha_observacion'=>$data->fecha_observacion, 'id_actividad'=>$data->id_actividad)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Observacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_observacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Actividad')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Seguimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_seguimiento); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Propietario')); ?>:</b>
	<?php echo CHtml::encode($data->propietario); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Empleado')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('Avance')); ?>:</b>
	<?php echo CHtml::encode($data->avance); ?><br />
</div>
