<?php
/* @var $this TipoCriticidadController */
/* @var $model TipoCriticidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_criticidad'); ?>
		<?php echo $form->textField($model,'id_tipo_criticidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripción'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
	</div>
			
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->