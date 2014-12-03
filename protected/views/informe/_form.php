<?php
/* @var $this InformeController */
/* @var $model Informe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_auditoria'); ?>
		<?php echo $form->textField($model,'id_tipo_auditoria'); ?>
		<?php echo $form->error($model,'id_tipo_auditoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
		<?php echo $form->error($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_periodo_auditoria'); ?>
		<?php echo $form->textField($model,'fecha_periodo_auditoria'); ?>
		<?php echo $form->error($model,'fecha_periodo_auditoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cerrada'); ?>
		<?php echo $form->checkBox($model,'cerrada'); ?>
		<?php echo $form->error($model,'cerrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_emision'); ?>
		<?php echo $form->textField($model,'fecha_emision'); ?>
		<?php echo $form->error($model,'fecha_emision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->