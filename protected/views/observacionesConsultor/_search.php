<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_observaciones'); ?>
		<?php echo $form->textField($model,'id_observaciones'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_consultor'); ?>
		<?php echo $form->textField($model,'id_consultor'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_asignacion'); ?>
		<?php echo $form->textField($model,'fecha_asignacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'otro'); ?>
		<?php echo $form->textField($model,'otro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
