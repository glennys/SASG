<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'Observaciones'); ?>
        <?php echo $form->textField($model,'id_observaciones'); ?>
        <?php echo $form->error($model,'id_observaciones'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Unidades'); ?>
        <?php echo $form->textField($model,'id_unidades'); ?>
        <?php echo $form->error($model,'id_unidades'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Empleado Consultor'); ?>
        <?php echo $form->textField($model,'id_empleado_consultor'); ?>
        <?php echo $form->error($model,'id_empleado_consultor'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Plan General'); ?>
        <?php echo $form->textField($model,'plan_general'); ?>
        <?php echo $form->error($model,'plan_general'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Estado'); ?>
        <?php echo $form->textField($model,'id_estado'); ?>
        <?php echo $form->error($model,'id_estado'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Fecha Asignación'); ?>
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
