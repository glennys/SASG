<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */
/* @var $form CActiveForm */
?>

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
		<?php echo $form->label($model,'id_informe'); ?>
		<?php echo $form->textField($model,'id_informe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_naturaleza'); ?>
		<?php echo $form->textField($model,'id_naturaleza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_criticidad'); ?>
		<?php echo $form->textField($model,'id_tipo_criticidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_observacion'); ?>
		<?php echo $form->textField($model,'id_tipo_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_impacto'); ?>
		<?php echo $form->textField($model,'id_impacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_clasificacion'); ?>
		<?php echo $form->textField($model,'id_clasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recomendacion'); ?>
		<?php echo $form->textField($model,'recomendacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cerrada'); ?>
		<?php echo $form->checkBox($model,'cerrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle_observacion'); ?>
		<?php echo $form->textField($model,'detalle_observacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accion_correctiva'); ?>
		<?php echo $form->textField($model,'accion_correctiva',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicio_accion_correctiva'); ?>
		<?php echo $form->textField($model,'fecha_inicio_accion_correctiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_fin_accion_correctiva'); ?>
		<?php echo $form->textField($model,'fecha_fin_accion_correctiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_accion_general'); ?>
		<?php echo $form->textField($model,'plan_accion_general',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_observacion'); ?>
		<?php echo $form->textField($model,'codigo_observacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripción'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'riesgo'); ?>
		<?php echo $form->textField($model,'riesgo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criterio'); ?>
		<?php echo $form->textField($model,'criterio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'causa'); ?>
		<?php echo $form->textField($model,'causa',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'efecto'); ?>
		<?php echo $form->textField($model,'efecto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

		<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->