<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span>son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'parent_id_rol'); ?>
		<?php //echo $form->textField($model,'parent_id_rol'); ?>
		<?php //echo $form->error($model,'parent_id_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php //echo $form->textField($model,'fecha_creacion'); ?>
		<?php //echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'fecha_actualizacion'); ?>
		<?php //echo $form->textField($model,'fecha_actualizacion'); ?>
		<?php //echo $form->error($model,'fecha_actualizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->