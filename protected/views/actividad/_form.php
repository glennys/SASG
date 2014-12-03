<?php
/* @var $this ActividadController */
/* @var $model Actividad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actividad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_observaciones'); ?>
		<?php echo $form->textField($model,'id_observaciones'); ?>
		<?php echo $form->error($model,'id_observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
		<?php echo $form->error($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_actividad'); ?>
		<?php echo $form->textField($model,'nombre_actividad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_fin',
		   		'value'=>$model->fecha_fin,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_fin,
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
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_inicio',
		   		'value'=>$model->fecha_inicio,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_inicio,
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

		
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cerrada'); ?>
		<?php echo $form->checkBox($model,'cerrada'); ?>
		<?php echo $form->error($model,'cerrada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->