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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	  <div class="row">
		<?php echo $form->labelEx($model,'id_informe'); ?>
		<?php echo $form->dropDownList($model,'id_informe', 
		CHtml::listData(Informe::model()->findAll(), 'id_informe', 'nombre'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_informe'); ?>
	</div>

  <div class="row">
		<?php echo $form->labelEx($model,'id_unidad'); ?>
		<?php echo $form->dropDownList($model,'id_unidad', 
		CHtml::listData(Unidad::model()->findAll(), 'id_unidad', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_unidad'); ?>
	</div>

	 <div class="row">
		<?php echo $form->labelEx($model,'id_tipo_criticidad'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_criticidad', 
		CHtml::listData(TipoCriticidad::model()->findAll(), 'id_tipo_criticidad', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_tipo_criticidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_clasificacion'); ?>
		<?php echo $form->dropDownList($model,'id_clasificacion', 
		CHtml::listData(Clasificacion::model()->findAll(), 'id_clasificacion', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_clasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado'); ?>
		<?php echo $form->dropDownList($model,'id_estado', 
		CHtml::listData(Estado::model()->findAll(), 'id_estado', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_estado'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'recomendacion'); ?>
		<?php echo $form->textField($model,'recomendacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'recomendacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cerrada'); ?>
		<?php echo $form->checkBox($model,'cerrada'); ?>
		<?php echo $form->error($model,'cerrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle_observacion'); ?>
		<?php echo $form->textField($model,'detalle_observacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'detalle_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accion_correctiva'); ?>
		<?php echo $form->textField($model,'accion_correctiva',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'accion_correctiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio_accion_correctiva'); ?>
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
		<?php echo $form->labelEx($model,'fecha_fin_accion_correctiva'); ?>
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
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_observacion'); ?>
		<?php echo $form->textField($model,'codigo_observacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_auditor'); ?>
		<?php echo $form->dropDownList($model,'id_auditor', 
		CHtml::listData(ObservacionesAuditor::model()->findAll(), 'id_auditor', 'observaciones'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_auditor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tema'); ?>
		<?php echo $form->dropDownList($model,'id_tema',
		CHtml::listData(TemaInteres::model()->findAll(), 'id_tema', 'descripcion'),
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_tema'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_riesgo'); ?>
		<?php echo $form->dropDownList($model,'id_riesgo', 
		CHtml::listData(Riesgo::model()->findAll(), 'id_riesgo', 'descripcion'), //findall es para listar todos los registros de esa tabla
		array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_riesgo'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'id_grupo'); ?>	
		<?php echo $form->dropDownList($model,'id_grupo', 
				CHtml::listData(Grupo::model()->findAll(), 'id_grupo', 'descripcion'),
				array (
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('Observaciones/Lista'),
						'update'=>'#'.CHtml::activeId($model,'id_subgrupo'),					
					),'prompt'=>'Seleccione Grupo','style'=>'width:240px;font-style: italic;font-size:10px;'
				)
				
		); ?>
		<?php echo $form->error($model,'id_grupo'); ?>
	</div>


		<div class="row">

		<?php echo $form->labelEx($model,'Subgrupo'); ?>
		<?php echo $form->dropDownList($model,'id_subgrupo',
		 CHtml::listData(Subgrupo::model()->findAll(), 'id_subgrupo', 'tipo_subgrupo'),
			array('empty'=>'Seleccione Subgrupo','style'=>'width:240px;font-style: italic;font-size:10px;')
			
		); ?>		
		<?php echo $form->error($model,'id_subgrupo'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'avance_pac'); ?>
		<?php echo $form->textField($model,'avance_pac'); ?>
		<?php echo $form->error($model,'avance_pac'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->