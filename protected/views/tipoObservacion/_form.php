<?php
/* @var $this TipoObservacionController */
/* @var $model TipoObservacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-observacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		

		<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_creacion',
		   		'value'=>$model->fecha_creacion,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_creacion,
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
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_actualizacion'); ?>
		
<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_actualizacion',
		   		'value'=>$model->fecha_actualizacion,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_actualizacion,
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

		<?php echo $form->error($model,'fecha_actualizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->