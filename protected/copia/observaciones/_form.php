<?php
/* @var $this ObservacionesController */
/* @var $model Observaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

			<?php //codigo para crear una liste de seleccion de la base de datos
		//echo $form->dropDownList($model,'id_informe', 
		//CHtml::listData(Informe::model()->findAll(), 'id_informe', 'nombre')); ?>
		<?php echo $form->labelEx($model,'informe'); ?>
		<?php echo $form->dropDownList($model,'id_informe', 
		CHtml::listData(Informe::model()->findAll(), 'id_informe', 'nombre'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>	
		<?php echo $form->error($model,'id_informe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad'); ?>
		<?php echo $form->dropDownList($model,'id_unidad', 
		CHtml::listData(Unidad::model()->findAll(), 'id_unidad', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Naturaleza'); ?>
		<?php echo $form->dropDownList($model,'id_naturaleza', 
		CHtml::listData(Naturaleza::model()->findAll(), 'id_naturaleza', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_naturaleza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo Criticidad'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_criticidad', 
		CHtml::listData(TipoCriticidad::model()->findAll(), 'id_tipo_criticidad', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_tipo_criticidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo Observación'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_observacion', 
		CHtml::listData(TipoObservacion::model()->findAll(), 'id_tipo', 'descripcion' ),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_tipo_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Impacto'); ?>
		<?php echo $form->dropDownList($model,'id_impacto', 
		CHtml::listData(Impacto::model()->findAll(), 'id_impacto', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_impacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clasificación'); ?>
		<?php echo $form->dropDownList($model,'id_clasificacion', 
		CHtml::listData(Clasificacion::model()->findAll(), 'id_clasificacion', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_clasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->dropDownList($model,'id_estado', 
		CHtml::listData(Estado::model()->findAll(), 'id_estado', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Recomendación'); ?>
		<?php echo $form->textField($model,'recomendacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'recomendacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cerrada'); ?>
		<?php //echo $form->checkBox($model,'cerrada'); ?>
		<?php echo $form->dropDownList($model,'cerrada',array('1' => 'Si', '0' => 'No'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'cerrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Detalle Observación'); ?>
		<?php echo $form->textField($model,'detalle_observacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'detalle_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Acción Correctiva'); ?>
		<?php echo $form->textField($model,'accion_correctiva',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'accion_correctiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Inicio Acción Correctiva'); ?>
		<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_inicio_accion_correctiva',
		   		'value'=>$model->fecha_inicio_accion_correctiva,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_inicio_accion_correctiva,
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
		<?php echo $form->error($model,'fecha_inicio_accion_correctiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Fin Acción Correctiva'); ?>
		<?php
 			
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   		'model'=>$model,
		   		'attribute'=>'fecha_fin_accion_correctiva',
		   		'value'=>$model->fecha_fin_accion_correctiva,
		   	'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   		'options'=>array(
		    		'autoSize'=>true,
		    		'defaultDate'=>$model->fecha_fin_accion_correctiva,
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
		<?php echo $form->error($model,'fecha_fin_accion_correctiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Plan Acción General'); ?>
		<?php echo $form->textField($model,'plan_accion_general',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'plan_accion_general'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Código'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Código Observación'); ?>
		<?php echo $form->textField($model,'codigo_observacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripción'); ?>
		<?php echo $form->textArea($model,'descripcion',array('size'=>100,'maxlength'=>550)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Riesgo'); ?>
		<?php echo $form->textArea($model,'riesgo',array('size'=>100,'maxlength'=>550)); ?>
		<?php echo $form->error($model,'riesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Criterio'); ?>
		<?php echo $form->textField($model,'criterio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'criterio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Causa'); ?>
		<?php echo $form->textField($model,'causa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'causa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Efecto'); ?>
		<?php echo $form->textField($model,'efecto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'efecto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->