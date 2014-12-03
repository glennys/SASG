<?php
/* @var $this ClasificacionController */
/* @var $data Clasificacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clasificacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_clasificacion), array('view', 'id'=>$data->id_clasificacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

</div>