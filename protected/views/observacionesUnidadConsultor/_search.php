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
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_observacion'); ?>
		<?php echo $form->textField($model,'fecha_observacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_actividad'); ?>
		<?php echo $form->textField($model,'id_actividad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_seguimiento'); ?>
		<?php echo $form->textField($model,'fecha_seguimiento'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'avance'); ?>
		<?php echo $form->textField($model,'avance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
