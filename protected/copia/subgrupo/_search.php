<?php
/* @var $this SubgrupoController */
/* @var $model Subgrupo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_subgrupo'); ?>
		<?php echo $form->textField($model,'id_subgrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_subgrupo'); ?>
		<?php echo $form->textField($model,'tipo_subgrupo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->