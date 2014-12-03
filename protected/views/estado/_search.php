<?php
/* @var $this EstadoController */
/* @var $model Estado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
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
		<?php echo $form->label($model,'notificacion'); ?>
		<?php echo $form->textField($model,'notificacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'fecha_creacion'); ?>
		<?php// echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'fecha_actualizacion'); ?>
		<?php //echo $form->textField($model,'fecha_actualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_notificacion'); ?>
		<?php echo $form->textField($model,'tipo_notificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->