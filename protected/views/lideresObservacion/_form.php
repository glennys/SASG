<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_observacion'); ?>
        <?php echo $form->textField($model,'id_observacion'); ?>
        <?php echo $form->error($model,'id_observacion'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_unidad'); ?>
        <?php echo $form->textField($model,'id_unidad'); ?>
        <?php echo $form->error($model,'id_unidad'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_empleado_supervisor'); ?>
        <?php echo $form->textField($model,'id_empleado_supervisor'); ?>
        <?php echo $form->error($model,'id_empleado_supervisor'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'aprobacion'); ?>
        <?php echo $form->textField($model,'aprobacion'); ?>
        <?php echo $form->error($model,'aprobacion'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'fecha_asignacion'); ?>
        <?php
            
           $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fecha_asignacion',
                'value'=>$model->fecha_asignacion,
            'language' => 'es',
           'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fecha_asignacion,
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
        <?php echo $form->error($model,'fecha_asignacion'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
