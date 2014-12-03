<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_unidad'=>$data->id_unidad, 'id_observaciones'=>$data->id_observaciones)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_observaciones); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_responsable')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_responsable); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('unidades_involucradas')); ?>:</b>
	<?php echo CHtml::encode($data->unidades_involucradas); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio_estimada')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio_estimada); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin_estimada')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin_estimada); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('indicador_logro')); ?>:</b>
	<?php echo CHtml::encode($data->indicador_logro); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('evento')); ?>:</b>
	<?php echo CHtml::encode($data->evento); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('unidades_apoyo')); ?>:</b>
	<?php echo CHtml::encode($data->unidades_apoyo); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?><br />
</div>
