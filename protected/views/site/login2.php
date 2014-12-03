<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Ingreso';

?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<table  align="center" valing="middle" style="width: 910px; height: auto; border: none">
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
                        <input name="LoginForm[username]" id="LoginForm_username" type="text" style="background-color: #FFF;
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
                        <input name="LoginForm[password]" id="LoginForm_password" type="password" style="background-color: #FFF;
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
                        <input type="submit" name="yt0" value="Aceptar" style=" background-color: #CCC;
                                                                                border-color: #666;
                                                                                color: #666;
                                                                                cursor: pointer;
                                                                                font-size: xx-small;
                                                                                font-weight: normal;
                                                                                height: 16px;
                                                                                padding: 0px 5px;
                                                                                text-align: center;
                                                                                text-decoration: none;
                                                                                white-space: nowrap;
                                                                                display: inline-block;
                                                                                -moz-box-align: center;
                                                                                -moz-box-sizing: border-box;">	
                    </div>
            </div>
        </td>
    </tr>
</table>
<?php $this->endWidget(); ?>
