<?php
/* @var $this AsigOrgController */
/* @var $model AsigOrg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asig-org-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'co_asig_org'); ?>
		<?php echo $form->textField($model,'co_asig_org'); ?>
		<?php echo $form->error($model,'co_asig_org'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nu_docm_idnt'); ?>
		<?php 
            if ( empty($model->nu_docm_idnt) ) {
                echo $form->textField($model,'nu_docm_idnt'); 
            }else{
                echo $form->textField($model,'nu_docm_idnt',array('disabled'=>'true')); 
            }
        ?>
		<?php echo $form->error($model,'nu_docm_idnt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'co_org'); ?>
		<?php //echo $form->textField($model,'co_org'); ?>
                <?php echo $form->dropDownList($model,'co_org', 
					array( '' => 'Seleccione...', CHtml::listData(BaseOrg::model()->findAll(), 'co_org', 'nb_org') ) ); ?>
                
		<?php echo $form->error($model,'co_org'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->