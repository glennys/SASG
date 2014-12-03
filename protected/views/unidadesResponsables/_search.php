<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_observaciones'); ?>
		<?php echo $form->textField($model,'id_observaciones'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'nombre_responsable'); ?>
		<?php echo $form->textField($model,'nombre_responsable'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'unidades_involucradas'); ?>
		<?php echo $form->textField($model,'unidades_involucradas'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_inicio_estimada'); ?>
		<?php echo $form->textField($model,'fecha_inicio_estimada'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fecha_fin_estimada'); ?>
		<?php echo $form->textField($model,'fecha_fin_estimada'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'indicador_logro'); ?>
		<?php echo $form->textField($model,'indicador_logro'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'evento'); ?>
		<?php echo $form->textField($model,'evento'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'correo'); ?>
		<?php echo $form->textField($model,'correo'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'unidades_apoyo'); ?>
		<?php echo $form->textField($model,'unidades_apoyo'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
