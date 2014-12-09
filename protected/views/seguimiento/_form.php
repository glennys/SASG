<?php
/* @var $this SeguimientoController */
/* @var $model Seguimiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seguimiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Actividad'); ?>
		<?php echo $form->textField($model,'id_actividad'); ?>
		<?php echo $form->error($model,'id_actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripción'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Adjunto'); ?>
		<?php echo $form->textField($model,'adjunto'); ?>
		<?php echo $form->error($model,'adjunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Modificación'); ?>
		<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_modificacion',
		   		'value'=>$model->fecha_modificacion,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_modificacion,
		   			 'dateFormat'=>'yy-mm-dd',
		    		//'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.jpg',
		    'buttonImageOnly'=>true,
		    'buttonText'=> '',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'focus', // se puede colocar focus  o button
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'date("Y-m-d")', 
		    'maxDate'=> "+20Y",
		    ),
		  )); 
		 ?>
		<?php echo $form->error($model,'fecha_modificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->