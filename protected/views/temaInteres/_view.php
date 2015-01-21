<?php
/* @var $this TemaInteresController */
/* @var $data TemaInteres */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tema')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tema), array('view', 'id'=>$data->id_tema)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

</div>