<?php
/* @var $this ProcesosController */
/* @var $data Procesos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Proceso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proceso), array('view', 'id'=>$data->id_proceso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_proceso')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_proceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_proceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripción')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_proceso); ?>
	<br />
	

</div>