//<?php
/* @var $this NaturalezaController */
/* @var $model Naturaleza */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_naturaleza'); ?>
		<?php echo $form->textField($model,'id_naturaleza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id_naturaleza'); ?>
		<?php echo $form->textField($model,'parent_id_naturaleza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'fecha_creacion'); ?>
		<?php //echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'fecha_actualizacion'); ?>
		<?php //echo $form->textField($model,'fecha_actualizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->