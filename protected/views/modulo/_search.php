<?php
/* @var $this ModuloController */
/* @var $model Modulo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_permisos'); ?>
		<?php echo $form->textField($model,'id_permisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_modulo'); ?>
		<?php echo $form->textField($model,'nombre_modulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>255)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'parent_id_permisos'); ?>
		<?php echo $form->textField($model,'parent_id_permisos'); ?>
	</div>
		<?php /* 

	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_actualizacion'); ?>
		<?php echo $form->textField($model,'fecha_actualizacion'); ?>
	</div> */?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->