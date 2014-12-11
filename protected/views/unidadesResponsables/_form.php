<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_unidad'); ?>
        <?php echo $form->textField($model,'id_unidad'); ?>
        <?php echo $form->error($model,'id_unidad'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_observaciones'); ?>
        <?php echo $form->textField($model,'id_observaciones'); ?>
        <?php echo $form->error($model,'id_observaciones'); ?>
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
        <?php echo $form->labelEx($model,'Nombre Responsable'); ?>
        <?php echo $form->textField($model,'nombre_responsable'); ?>
        <?php echo $form->error($model,'nombre_responsable'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Teléfono'); ?>
        <?php echo $form->textField($model,'telefono'); ?>
        <?php echo $form->error($model,'telefono'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Unidades Involucradas'); ?>
        <?php echo $form->textField($model,'unidades_involucradas'); ?>
        <?php echo $form->error($model,'unidades_involucradas'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Fecha Inicio Estimada'); ?>
        <?php
            
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fecha_inicio_estimada',
                'value'=>$model->fecha_inicio_estimada,
            'language' => 'es',
           'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fecha_inicio_estimada,
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
        <?php echo $form->error($model,'fecha_inicio_estimada'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Fecha Fin Estimada'); ?>
       <?php
            
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fecha_fin_estimada',
                'value'=>$model->fecha_fin_estimada,
            'language' => 'es',
           'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fecha_fin_estimada,
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
        <?php echo $form->error($model,'fecha_fin_estimada'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Indicador Logro'); ?>
        <?php echo $form->textField($model,'indicador_logro'); ?>
        <?php echo $form->error($model,'indicador_logro'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Evento'); ?>
        <?php echo $form->textField($model,'evento'); ?>
        <?php echo $form->error($model,'evento'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Correo'); ?>
        <?php echo $form->textField($model,'correo'); ?>
        <?php echo $form->error($model,'correo'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Unidades Apoyo'); ?>
        <?php echo $form->textField($model,'unidades_apoyo'); ?>
        <?php echo $form->error($model,'unidades_apoyo'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_estado'); ?>
        <?php echo $form->textField($model,'id_estado'); ?>
        <?php echo $form->error($model,'id_estado'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
