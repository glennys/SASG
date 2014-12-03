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
        <?php echo $form->labelEx($model,'id_unidades'); ?>
        <?php echo $form->textField($model,'id_unidades'); ?>
        <?php echo $form->error($model,'id_unidades'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_empleado_consultor'); ?>
        <?php echo $form->textField($model,'id_empleado_consultor'); ?>
        <?php echo $form->error($model,'id_empleado_consultor'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'plan_general'); ?>
        <?php echo $form->textField($model,'plan_general'); ?>
        <?php echo $form->error($model,'plan_general'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_estado'); ?>
        <?php echo $form->textField($model,'id_estado'); ?>
        <?php echo $form->error($model,'id_estado'); ?>
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
