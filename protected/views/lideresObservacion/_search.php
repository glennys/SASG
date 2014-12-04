<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_observacion'); ?>
		<?php echo $form->textField($model,'id_observacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_empleado_supervisor'); ?>
		<?php echo $form->textField($model,'id_empleado_supervisor'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'aprobacion'); ?>
		<?php echo $form->textField($model,'aprobacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_asignacion'); ?>
		<?php echo $form->textField($model,'fecha_asignacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
