<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_permisos'); ?>
		<?php echo $form->textField($model,'id_permisos'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_operaciones'); ?>
		<?php echo $form->textField($model,'id_operaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
