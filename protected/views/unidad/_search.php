<?php
/* @var $this UnidadController */
/* @var $model Unidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id_unidad'); ?>
		<?php echo $form->textField($model,'parent_id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orden'); ?>
		<?php echo $form->textField($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_supervisor_unidad'); ?>
		<?php echo $form->textField($model,'nombre_supervisor_unidad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension_supervisor_unidad'); ?>
		<?php echo $form->textField($model,'extension_supervisor_unidad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_supervisor_ldap'); ?>
		<?php echo $form->textField($model,'celular_supervisor_ldap',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_unidad_ldap'); ?>
		<?php echo $form->textField($model,'descripcion_unidad_ldap',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>  

</div><!-- search-form -->