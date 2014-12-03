<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_estado'); ?>
        <?php echo $form->textField($model,'id_estado'); ?>
        <?php echo $form->error($model,'id_estado'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_informe'); ?>
        <?php echo $form->textField($model,'id_informe'); ?>
        <?php echo $form->error($model,'id_informe'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'fecha_modificacion'); ?>
        <?php echo $form->textField($model,'fecha_modificacion'); ?>
        <?php echo $form->error($model,'fecha_modificacion'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
