<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

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
        <?php echo $form->textField($model,'fecha_creacion'); ?>
        <?php echo $form->error($model,'fecha_creacion'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'nombre_responsable'); ?>
        <?php echo $form->textField($model,'nombre_responsable'); ?>
        <?php echo $form->error($model,'nombre_responsable'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'telefono'); ?>
        <?php echo $form->textField($model,'telefono'); ?>
        <?php echo $form->error($model,'telefono'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'unidades_involucradas'); ?>
        <?php echo $form->textField($model,'unidades_involucradas'); ?>
        <?php echo $form->error($model,'unidades_involucradas'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'fecha_inicio_estimada'); ?>
        <?php echo $form->textField($model,'fecha_inicio_estimada'); ?>
        <?php echo $form->error($model,'fecha_inicio_estimada'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'fecha_fin_estimada'); ?>
        <?php echo $form->textField($model,'fecha_fin_estimada'); ?>
        <?php echo $form->error($model,'fecha_fin_estimada'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'indicador_logro'); ?>
        <?php echo $form->textField($model,'indicador_logro'); ?>
        <?php echo $form->error($model,'indicador_logro'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'evento'); ?>
        <?php echo $form->textField($model,'evento'); ?>
        <?php echo $form->error($model,'evento'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'correo'); ?>
        <?php echo $form->textField($model,'correo'); ?>
        <?php echo $form->error($model,'correo'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'unidades_apoyo'); ?>
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
