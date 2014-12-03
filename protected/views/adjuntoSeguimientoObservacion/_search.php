<?php
/* @var $this AdjuntoSeguimientoObservacionController */
/* @var $model AdjuntoSeguimientoObservacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_adjunto_seguimiento_observacion'); ?>
		<?php echo $form->textField($model,'id_adjunto_seguimiento_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_observacion'); ?>
		<?php echo $form->textField($model,'id_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adjunto'); ?>
		<?php echo $form->textField($model,'adjunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->