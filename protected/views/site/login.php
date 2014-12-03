<?php $this->pageTitle=Yii::app()->name . ' - Ingreso'; ?>

<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
    <?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>

<?php else: ?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'logon-form',
    'enableClientValidation'=>false,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>
	<!--
   	<div class="row">
        <?php echo $form->labelEx($model,'Usuario'); ?>
        <?php echo $form->textField($model,'username'); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>
	-->

	<table  align="center" valing="middle" style="width: 400px; height: auto; border: none">
		<tr>
		    <td align="center" style="alignment-adjust: central">
		        
		        <div style="text-align: center;">
		            
		            <div style="width: 328px; height: 200px; border: solid 1px #000; text-align: left; margin: 50px auto;">
		                <div style="text-align: left;
		                            font-family: Verdana;
		                            font-weight: bold;
		                            font-style: italic;
		                            font-size: 14px;
		                            color: #039;
		                            width: 100%;
		                            height: 15px;
		                            padding-left: 2px;
		                            padding-bottom: 1px;">
		                    Bienvenido
		                </div>
		                <div style="background-color: #F33;
		                            width: 328px;
		                            text-align: right;
		                            font-family: Verdana;
		                            font-weight: bold;
		                            font-style: italic;
		                            font-size: 14px;
		                            color: #FFF;
		                            height: 25px;
		                            padding-left: 0px;
		                            padding-bottom: 0px;">
		                    <div style="text-align: right;
		                                font-family: Verdana;
		                                font-weight: bold;
		                                font-style: italic;
		                                font-size: 14px;
		                                margin-right: 5px;
		                                color: #FFF;">
		                        entrada a la aplicación
		                    </div>
		                    
		                </div> 
		                <div style="padding: 10px 0px 0px 5px;">
		                    <span style="font-family: verdana; font-size: xx-small; font-style: normal; color: #666; font-weight: normal;">
		                         Coloque su nombre de Usuario y Contraseña. 
		                    </span>
		                </div> 

		                <div style="
		                            background-position: left top;
		                            background-repeat: repeat-y;
		                            color: #666;
		                            font-size: xx-small;
		                            height: 10px;
		                            padding: 10px 4px 0px 7px;">
		                    <label for="LoginForm_username" class="required">Usuario <span class="required">*</span></label>
		                </div>
		                <div style="padding: 10px 0px 0px 10px;">
		                    <input name="CrugeLogon[username]" id="CrugeLogon_username" type="text" style="background-color: #FFF;
		                                                                                            border-color: #CCC;
		                                                                                            color: #000;
		                                                                                            border-style: solid;
		                                                                                            border-width: 1px;
		                                                                                            font-size: xx-small;
		                                                                                            height: 2.6ex;
		                                                                                            padding: 0px 2px 0px 5px;
		                                                                                            font-family: verdana;">
		                <?php echo $form->error($model,'username'); ?>
		                </div>

		                <div style="
		                            background-position: left top;
		                            background-repeat: repeat-y;
		                            color: #666;
		                            font-size: xx-small;
		                            height: 10px;
		                            padding: 10px 4px 0px 7px;">
		                    <label for="LoginForm_password" class="required">Contraseña <span class="required">*</span></label>
		                </div>
		                <div style="padding: 10px 0px 0px 10px;">
		                    <input name="CrugeLogon[password]" id="CrugeLogon_password" type="password" style="background-color: #FFF;
		                                                                                            border-color: #CCC;
		                                                                                            color: #000;
		                                                                                            border-style: solid;
		                                                                                            border-width: 1px;
		                                                                                            font-size: xx-small;
		                                                                                            height: 2.6ex;
		                                                                                            padding: 0px 2px 0px 5px;
		                                                                                            font-family: verdana;">
		                <?php echo $form->error($model,'username'); ?>
		                </div>

		                <div style="padding: 10px 0px 0px 10px;">
		                    <?php Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Login")); ?>
		                </div>
		        </div>
		    </td>
		</tr>
	</table>	

    <?php
        //  si el componente CrugeConnector existe lo usa:
        //
        if(Yii::app()->getComponent('crugeconnector') != null){
        if(Yii::app()->crugeconnector->hasEnabledClients){
    ?>
    <div class='crugeconnector'>
        <span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
        <ul>
        <?php
            $cc = Yii::app()->crugeconnector;
            foreach($cc->enabledClients as $key=>$config){
                $image = CHtml::image($cc->getClientDefaultImage($key));
                echo "<li>".CHtml::link($image,
                    $cc->getClientLoginUrl($key))."</li>";
            }
        ?>
        </ul>
    </div>
    <?php }} ?>


<?php $this->endWidget(); ?>
</div>
<?php endif; ?>
