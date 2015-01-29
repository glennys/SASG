<?php
/* @var $this SubgrupoController */
/* @var $model Subgrupo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subgrupo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_subgrupo'); ?>
		<?php echo $form->textField($model,'tipo_subgrupo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipo_subgrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_grupo'); ?>
		<?php echo $form->textField($model,'id_grupo'); ?>
		<?php echo $form->error($model,'id_grupo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->