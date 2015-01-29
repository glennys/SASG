<?php
/* @var $this RiesgoController */
/* @var $data Riesgo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_riesgo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_riesgo), array('view', 'id'=>$data->id_riesgo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	
</div>