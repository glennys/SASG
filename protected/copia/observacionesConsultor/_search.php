<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'Observaciones'); ?>
		<?php echo $form->textField($model,'id_observaciones'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Consultor'); ?>
		<?php echo $form->textField($model,'id_consultor'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Fecha Asignación'); ?>
		<?php echo $form->textField($model,'fecha_asignacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Otro'); ?>
		<?php echo $form->textField($model,'otro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
