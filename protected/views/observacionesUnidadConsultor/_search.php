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
		<?php echo $form->label($model,'Unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Fecha Observacion'); ?>
		<?php echo $form->textField($model,'fecha_observacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Actividad'); ?>
		<?php echo $form->textField($model,'id_actividad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Fecha Seguimiento'); ?>
		<?php echo $form->textField($model,'fecha_seguimiento'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Propietario'); ?>
		<?php echo $form->textField($model,'propietario'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Empleado'); ?>
		<?php echo $form->textField($model,'id_empleado'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Avance'); ?>
		<?php echo $form->textField($model,'avance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
