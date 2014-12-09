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
		<?php echo $form->label($model,'Unidades'); ?>
		<?php echo $form->textField($model,'id_unidades'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Empleado Consultor'); ?>
		<?php echo $form->textField($model,'id_empleado_consultor'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Plan General'); ?>
		<?php echo $form->textField($model,'plan_general'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Fecha Asignación'); ?>
		<?php echo $form->textField($model,'fecha_asignacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
