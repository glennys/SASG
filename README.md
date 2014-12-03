<<<<<<< HEAD
# _sisgefi_

_Descripcion: Sistema de Gestion Financiera GGTO_

## Configuración del proyecto

_¿Cómo puedo, como desarrollador, empezar a trabajar en el proyecto?_ 

1. Realice un Fork al proyecto desde su cuenta en guthub.
2. Haga un clon del proyecto que se ha copiado en su cuenta.
     
        git clone git@github.com:tu_cuenta_de_github/sisgefi.git

3. Copie la carpeta sisgefi en su servidor web
4. Istale la base de datos, ubicada en  

        ../protected/data/sisgefi_db/sisgefi_db.sql

5. Clone el proyecto CRUGE y coloquelo en la direccion
    (si la carpeta modules no existe creela y otorge los permisos web):

        ../protected/modules/cruge/

6. Cree un usuario admin desde su administrador de base de datos.
7. Ingrese a la aplicación desde httt://localhost/sisgefi


## Pruebas

_¿Cómo puedo ejecutar pruebas automatizadas del proyecto?_

### Pruebas Unitarias

1. No definidas

### Pruebas Integrales

1. No definidas

## Implementación

### _¿Cómo configurar el ambiente de implementación?_

- _No requiere configuración especial._

### _Cómo implementar_

## Solución de problemas y herramientas útiles

_Ejemplos de tareas comunes_

> e.g.
> 
> - No definidas.

## Cambios y Contribuciones

- _Integracion con modulo Cruge:_
    Para el manejo de permisos y roles se integra el modulo cruge, la tabla usuarios de
    gruge ha sido vinculada a través de una relacion por el campo user con la tabla 
    empleados, por esta razon para poder crear un empleado en el sistema previamente debera
    crear el user de ese empleado en la gestion de usuarios.

- _Integracion con behaviors:_
    Si ha creado los campos de autoria (fe_crea, fe_modf, usr_crea, usr_modf), 
    agregue la siguiente funcion en el modelo de la tabla en cuestion, para que
    se guarde automaticamente la fecha y id de usuario que intereactua con esta.
    Se almacenara automaticamente un registro de actividades en la tabla base_active_record_log

base_active_record_log.

        public function behaviors()
            {
                    return array(
                            'CTimestampBehavior' => array(
                                'class' => 'zii.behaviors.CTimestampBehavior',
                                'createAttribute' => 'fe_crea',
                                'updateAttribute' => 'fe_modf',
                                'setUpdateOnCreate' => true,
                            ),

                            'BlameableBehavior' => array(
                                'class' => 'application.components.BlameableBehavior',
                                'createdByColumn' => 'usr_crea',
                                'updatedByColumn' => 'usr_modf',
                            ),

                            'ActiveRecordLogableBehavior' => 'application.components.ActiveRecordLogableBehavior',
                    );
            }

- _moneymask:_
    Se utiliza la extension moneymask, para dar formato a las entradas de valores monetarios.

- _mbmenu:_
    Se utiliza la extension mbmenu, para personalizar la barra de menu.


## Licencia

    Copyright 2014
    Compañia Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados.
=======
SASG
====

Sistema Automatizado de Seguimiento a la Gestión
>>>>>>> d63a5f995a2d106d71929d9a095233a7af36e8ac
