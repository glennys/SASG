<?php
/* @var $this UnidadController */
/* @var $model Unidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unidad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id_unidad'); ?>
		<?php echo $form->textField($model,'parent_id_unidad'); ?>
		<?php echo $form->error($model,'parent_id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden'); ?>
		<?php echo $form->textField($model,'orden'); ?>
		<?php echo $form->error($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_supervisor_unidad'); ?>
		<?php echo $form->textField($model,'nombre_supervisor_unidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_supervisor_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension_supervisor_unidad'); ?>
		<?php echo $form->textField($model,'extension_supervisor_unidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'extension_supervisor_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_supervisor_ldap'); ?>
		<?php echo $form->textField($model,'celular_supervisor_ldap',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'celular_supervisor_ldap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_unidad_ldap'); ?>
		<?php echo $form->textField($model,'descripcion_unidad_ldap',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion_unidad_ldap'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->