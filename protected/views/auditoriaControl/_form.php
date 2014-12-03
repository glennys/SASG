<?php
/* @var $this AuditoriaControlController */
/* @var $model AuditoriaControl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'auditoria-control-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modulo'); ?>
		<?php echo $form->textField($model,'modulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'modulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metodo'); ?>
		<?php echo $form->textField($model,'metodo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_ip'); ?>
		<?php echo $form->textField($model,'direccion_ip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'direccion_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->