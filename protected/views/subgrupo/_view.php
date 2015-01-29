<?php
/* @var $this SubgrupoController */
/* @var $data Subgrupo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_subgrupo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_subgrupo), array('view', 'id'=>$data->id_subgrupo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_subgrupo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_subgrupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->id_grupo); ?>
	<br />


</div>