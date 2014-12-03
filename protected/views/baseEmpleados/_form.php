<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleados-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
       ));

       
        //Arreglo para campo ldap_login
       $options = array(array('ldap_login'=>0, 'descripcion'=>'Autenticacion por BD'), array('ldap_login'=>1, 'descripcion'=>'Autenticacion por LDAP'),);

?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_docm_idnt'); ?>
		<?php echo $form->textField($model,'nu_docm_idnt'); ?>
		<?php echo $form->error($model,'nu_docm_idnt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_docm_idnt_supv'); ?>
		<?php echo $form->textField($model,'nu_docm_idnt_supv'); ?>
		<?php echo $form->error($model,'nu_docm_idnt_supv'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nb_pers'); ?>
		<?php echo $form->textField($model,'nb_pers',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nb_pers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ldap_login'); ?>
		<?php echo $form->dropDownList($model,'ldap_login', CHtml::listData($options, 'ldap_login', 'descripcion') ); ?>
                <?php echo $form->error($model,'ldap_login'); ?>
	</div>
        
        <?php /*
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
        */ ?>
        
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