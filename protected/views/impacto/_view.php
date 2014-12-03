<?php
/* @var $this ImpactoController */
/* @var $data Impacto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_impacto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_impacto), array('view', 'id'=>$data->id_impacto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	
</div>