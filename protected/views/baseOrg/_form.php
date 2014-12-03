<?php
/* @var $this OrgController */
/* @var $model Org */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'org-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
  
	<div class="row">
		<?php echo $form->labelEx($model,'Organización Padre'); ?>
		<?php //echo $form->textField($model,'co_org_dpnd'); ?>
                <?php echo $form->dropDownList($model,'co_org_dpnd', 
			CHtml::listData(BaseOrg::model()->findAll(), 'co_org', 'nb_org'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'co_org_dpnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_org'); ?>
		<?php echo $form->textField($model,'nb_org',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nb_org'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_descripcion'); ?>
		<?php echo $form->textField($model,'tx_descripcion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tx_descripcion'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'ceco'); ?>
		<?php echo $form->textField($model,'ceco'); ?>
		<?php echo $form->error($model,'ceco'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'abv_org'); ?>
		<?php echo $form->textField($model,'abv_org',array('size'=>6,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'abv_org'); ?>
	</div>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
		<?php echo $form->error($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
		<?php echo $form->error($model,'fe_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'in_stat'); ?>
	</div>
        */?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'tx_desc'); ?>
		<?php echo $form->textField($model,'tx_desc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
