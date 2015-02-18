<?php
/* @var $this InformeController */
/* @var $model Informe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_clase_auditoria'); ?>
		<?php echo $form->dropDownList($model,'id_clase_auditoria', 
		CHtml::listData(ClaseAuditoria::model()->findAll(), 'id_clase_auditoria', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_clase_auditoria'); ?>
	</div>

	<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'id_estado'); ?>
		<?php echo $form->dropDownList($model,'id_estado', 
		CHtml::listData(Estado::model()->findAll(), 'id_estado', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_estado'); ?>
	</div>
	*/ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_periodo_auditoria'); ?>
		<?php
            
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fecha_periodo_auditoria',
                'value'=>$model->fecha_periodo_auditoria,
            'language' => 'es',
           'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fecha_periodo_auditoria,
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
		<?php echo $form->error($model,'fecha_periodo_auditoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cerrada'); ?>
		<?php echo $form->checkBox($model,'cerrada'); ?>
		<?php echo $form->error($model,'cerrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_emision'); ?>
		<?php
            
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fecha_emision',
                'value'=>$model->fecha_emision,
            'language' => 'es',
           'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fecha_emision,
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
		<?php echo $form->error($model,'fecha_emision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano_fiscal'); ?>
		<?php echo $form->textField($model,'ano_fiscal'); ?>
		<?php echo $form->error($model,'ano_fiscal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->