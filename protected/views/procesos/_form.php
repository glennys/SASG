<?php
/* @var $this ProcesosController */
/* @var $model Procesos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'procesos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id_proceso'); ?>
		<?php echo $form->textField($model,'parent_id_proceso'); ?>
		<?php echo $form->error($model,'parent_id_proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_proceso'); ?>
		<?php echo $form->textField($model,'nombre_proceso',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_proceso'); ?>
		<?php echo $form->textField($model,'descripcion_proceso',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion_proceso'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->