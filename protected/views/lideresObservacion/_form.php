<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

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
        <?php echo $form->textField($model,'fecha_asignacion'); ?>
        <?php echo $form->error($model,'fecha_asignacion'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
