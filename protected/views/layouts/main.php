<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />
</head>

<body>

<div class="container" id="page" >

    <div>
        <img src="http://www.cantv.com.ve/Portales/Cantv/Data/CabezalBolivariano_cantv.jpg" style="width: 950px" />
        <!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cabecera_gobenlinea.gif" style="width: 950px" /> !-->
    </div>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<?php if(!Yii::app()->user->isGuest){ ?>		
		<div id="conectedUser">Bienvenido: <?php echo CHtml::encode(Yii::app()->user->name); ?></div>
		<div style="padding: 0px 10px 20px 0px;">
			<div id="logout"><?php echo CHtml::link('Salir del Sistema', array('cruge/ui/logout') ); ?></div>
		</div>
		<?php }?>
	</div>

	<!-- header -->
        
	<div id="">
		            
            <?php 
            
            if(!Yii::app()->user->isGuest){

                $this->widget('application.extensions.mbmenu.MbMenu',
                    array(
                    'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),
                            array('label'=>'Administrar',
                                'items'=>array(
                                    array('label'=>'Usuarios', 'url'=>Yii::app()->user->ui->userManagementAdminUrl,'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Empleados', 'url'=>array('/Empleado/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                   // array('label'=>'Modulos', 'url'=>array('/Modulo/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    /* array('label'=>'Módulos', 
                                        'items'=>array(
                                            //array ('label'=>'Módulo','url'=>array('/Modulo/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                            array ('label'=>'Operaciones','url'=>array('/ModuloOperaciones/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                            array ('label'=>'Rol','url'=>array('/RolModulos/admin'), 'visible'=>!Yii::app()->user->isGuest),

                                        ),
                                    ),*/

                                ),
                            ),
                            array('label'=>'Configuracion',
                                    'items'=>array(
                                    /*array('label'=>'Rol',
                                        'items'=>array(
                                            array('label'=>'Rol', 'url'=>array('/Rol/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                            array('label'=>'Rol del Empleado', 'url'=>array('/EmpleadoRol/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    ),
                                ),*/
                                   // array('label'=>'Unidad', 'url'=>array('/Unidad/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Actividad', 'url'=>array('/Actividad/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Unidad',
                                        'items'=>array(
                                            array('label'=>'Unidad', 'url'=>array('/Unidad/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                            array('label'=>'Responsable', 'url'=>array('/UnidadesResponsables/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    ),
                                ),
                                    array('label'=>'Tema de Interes', 'url'=>array('/TemaInteres/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Empleado', 'url'=>array('/Empleado/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Estado', 'url'=>array('/Estado/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Clasificación', 'url'=>array('/Clasificacion/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Informe', 
                                        'items'=>array(
                                            array ('label'=>'Informe','url'=>array('/Informe/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                            array ('label'=>'Estado Informe','url'=>array('/EstadoInforme/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                        ),
                                    ),

                                    array('label'=>'Riesgo O/H', 'url'=>array('/Riesgo/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Procesos', 'url'=>array('/Procesos/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Seguimiento', 'url'=>array('/Seguimiento/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Criticidad', 'url'=>array('/TipoCriticidad/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Operaciones', 'url'=>array('/Operaciones/admin'), 'visible'=>!Yii::app()->user->isGuest),
                          
                                    
                                    
                                ),
                            ),
                            array('label'=>'Observaciones',
                                'items'=>array(
                                    array('label'=>'Observación', 'url'=>array('/Observaciones/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Estado', 'url'=>array('/EstadoObservaciones/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Auditor', 'url'=>array('/ObservacionesAuditor/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Lider observacion', 'url'=>array('/LideresObservacion/admin'), 'visible'=>!Yii::app()->user->isGuest),                                    
                                    //array('label'=>'Tipo', 'url'=>array('/TipoObservacion/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Consultor', 'url'=>array('/ObservacionesConsultor/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Unidad', 'url'=>array('/ObservacionesUnidad/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                   // array('label'=>'Unidad Consultor', 'url'=>array('/ObservacionesUnidadConsultor/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Historial lider', 'url'=>array('/LiderObservacionHistorial/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                             array('label'=>'Grupo O/H',
                                'items'=>array(
                                    array('label'=>'Grupo O/H', 'url'=>array('/Grupo/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Subgrupo O/H', 'url'=>array('/Subgrupo/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Observaciones', 'url'=>array('/NaturalezaObservacion/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                   // array('label'=>'Consultor', 'url'=>array('/ObservacionesConsultor/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Unidad', 'url'=>array('/ObservacionesUnidadclass/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                   // array('label'=>'Unidad Consultor', 'url'=>array('/ObservacionesUnidadConsultor/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                            array('label'=>'Auditoria',
                                'items'=>array(
                                    array('label'=>'Auditoria', 'url'=>array('/TipoAuditoria/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    //array('label'=>'Tipo', 'url'=>array('/AuditoriaControl/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                            array('label'=>'Reportes',
                                
                            ),
                            //array('label'=>'Acerca de',
                            //    'items'=>array(
                            //        array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                            //        array('label'=>'Contacto', 'url'=>array('/site/contact')),
                            //    ),
                            //),
                            //array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            //array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
                        ),
                    )
                );
            }
            ?>
            
	</div><!-- mainmenu -->
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        
        <?php echo $content; ?>
        
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by CANTV.<br/>
		Compañia Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>

</body>
</html>
