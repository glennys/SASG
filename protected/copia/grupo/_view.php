//<?php
/* @var $this GrupoController */
/* @var $data Grupo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grupo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_grupo), array('view', 'id'=>$data->id_grupo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	


</div>