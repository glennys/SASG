<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

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
        <?php echo $form->labelEx($model,'fecha_observacion'); ?>
        <?php echo $form->textField($model,'fecha_observacion'); ?>
        <?php echo $form->error($model,'fecha_observacion'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_actividad'); ?>
        <?php echo $form->textField($model,'id_actividad'); ?>
        <?php echo $form->error($model,'id_actividad'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'fecha_seguimiento'); ?>
        <?php echo $form->textField($model,'fecha_seguimiento'); ?>
        <?php echo $form->error($model,'fecha_seguimiento'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'propietario'); ?>
        <?php echo $form->textField($model,'propietario'); ?>
        <?php echo $form->error($model,'propietario'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_empleado'); ?>
        <?php echo $form->textField($model,'id_empleado'); ?>
        <?php echo $form->error($model,'id_empleado'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_estado'); ?>
        <?php echo $form->textField($model,'id_estado'); ?>
        <?php echo $form->error($model,'id_estado'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'avance'); ?>
        <?php echo $form->textField($model,'avance'); ?>
        <?php echo $form->error($model,'avance'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
