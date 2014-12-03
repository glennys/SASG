<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primerapellido_empleado'); ?>
		<?php echo $form->textField($model,'primerapellido_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundoapellido_empleado'); ?>
		<?php echo $form->textField($model,'segundoapellido_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrecompleto_empleado'); ?>
		<?php echo $form->textField($model,'nombrecompleto_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_empleado'); ?>
		<?php echo $form->textField($model,'email_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perfilsap_empleado'); ?>
		<?php echo $form->textField($model,'perfilsap_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coord_gcia_empleado'); ?>
		<?php echo $form->textField($model,'coord_gcia_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension_empleado'); ?>
		<?php echo $form->textField($model,'extension_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_empleado'); ?>
		<?php echo $form->textField($model,'celular_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_empleado'); ?>
		<?php echo $form->textField($model,'nombre_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_empleado'); ?>
		<?php echo $form->textField($model,'cedula_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supervisor_empleado'); ?>
		<?php echo $form->textField($model,'supervisor_empleado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poo'); ?>
		<?php echo $form->textField($model,'poo',array('size'=>10,'maxlength'=>10)); ?>
	</div>
			
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->