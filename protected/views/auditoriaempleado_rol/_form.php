<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_rol'); ?>
        <?php echo $form->textField($model,'id_rol'); ?>
        <?php echo $form->error($model,'id_rol'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_empleado'); ?>
        <?php echo $form->textField($model,'id_empleado'); ?>
        <?php echo $form->error($model,'id_empleado'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
