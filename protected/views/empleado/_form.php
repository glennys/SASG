<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
		<?php echo $form->error($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerapellido_empleado'); ?>
		<?php echo $form->textField($model,'primerapellido_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'primerapellido_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoapellido_empleado'); ?>
		<?php echo $form->textField($model,'segundoapellido_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'segundoapellido_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrecompleto_empleado'); ?>
		<?php echo $form->textField($model,'nombrecompleto_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombrecompleto_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_empleado'); ?>
		<?php echo $form->textField($model,'email_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_empleado'); ?>
		<?php echo $form->textField($model,'password_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perfilsap_empleado'); ?>
		<?php echo $form->textField($model,'perfilsap_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'perfilsap_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coord_gcia_empleado'); ?>
		<?php echo $form->textField($model,'coord_gcia_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'coord_gcia_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension_empleado'); ?>
		<?php echo $form->textField($model,'extension_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'extension_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_empleado'); ?>
		<?php echo $form->textField($model,'celular_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'celular_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_empleado'); ?>
		<?php echo $form->textField($model,'nombre_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_empleado'); ?>
		<?php echo $form->textField($model,'cedula_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cedula_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supervisor_empleado'); ?>
		<?php echo $form->textField($model,'supervisor_empleado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'supervisor_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poo'); ?>
		<?php echo $form->textField($model,'poo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'poo'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->