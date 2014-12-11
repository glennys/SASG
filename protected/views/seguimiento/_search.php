<?php
/* @var $this SeguimientoController */
/* @var $model Seguimiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Adjunto Seguimiento'); ?>
		<?php echo $form->textField($model,'id_adjunto_seguimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Actividad'); ?>
		<?php echo $form->textField($model,'id_actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripción'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Adjunto'); ?>
		<?php echo $form->textField($model,'adjunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha Modificación'); ?>
		<?php echo $form->textField($model,'fecha_modificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->