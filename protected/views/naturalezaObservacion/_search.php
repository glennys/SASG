<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_naturaleza'); ?>
		<?php echo $form->textField($model,'id_naturaleza'); ?>
	</div>
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
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
