<?php
/* @var $this ProcesosController */
/* @var $model Procesos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_proceso'); ?>
		<?php echo $form->textField($model,'id_proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id_proceso'); ?>
		<?php echo $form->textField($model,'parent_id_proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_proceso'); ?>
		<?php echo $form->textField($model,'nombre_proceso',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_proceso'); ?>
		<?php echo $form->textField($model,'descripcion_proceso',array('size'=>60,'maxlength'=>255)); ?>
	</div>
		
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->