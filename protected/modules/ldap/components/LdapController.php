<?php

class LdapController {

 public function ppauth_authorization_against_ldap($username, $password, $is_not_emptyLdap, $role_default){

         $user = Yii::app()->userManagerLdap->um->loadUserByUsername($username);
         //CVarDumper::dump($user['iduser']);
         $rolesArray =array();
         $rolesArray = Yii::app()->authManagerLdap->getRolesAsOptions();

        $keys_members_role = array_keys($rolesArray);
        $auth_url = "http://webphpdev:8000/ldapEmpleados/default/call/soap?WSDL";
        foreach ($keys_members_role as $members_role) {
            if ( $is_not_emptyLdap  ) {
              $args = array();
              $args['UserName'] = trim($username);
              $args['Password'] = trim($password);
              $args['Grupo'] = trim($rolesArray[$members_role]);

                $clientRol = new SoapClient( $auth_url );
                $resultRol = $clientRol->CheckRol( $args );
                if ($resultRol->CheckRolResponse != "Grupo No Existe") {
                    if (Yii::app()->authManagerLdap->getAuthItem($rolesArray[$members_role]) != null) {
                        Yii::log(
                            __METHOD__ . "\n asignando role: " .$rolesArray[$members_role] . " a userid:"
                                . $user['iduser'],
                            "info"
                        );
                       Yii::app()->authManagerLdap->assign($rolesArray[$members_role], $user['iduser']);
                    }

            }

            }
          }
          if ( Yii::app()->authManagerLdap->getAuthItem($role_default) != null) {
                        Yii::log(
                            __METHOD__ . "\n asignando role: " .$role_default . " a userid:"
                                . $user['iduser'],
                            "info"
                        );
                         Yii::app()->authManagerLdap->assign($role_default, $user['iduser']);
                    }


    }

    public function  ppauth_authenticate_against_ldap($username, $password){
        $auth_url = "http://webphpdev:8000/ldapEmpleados/default/call/soap?WSDL";
        $client_id = "12345";
        $args = array();
        $args['ClientID'] = trim($client_id);
        $args['UserName'] = trim($username);
        $args['Password'] = trim($password);
            try{
                 $client = new SoapClient( $auth_url );
                 $result = $client->CheckAccount( $args );
                 return $result->CheckAccountResponse;
            }catch(Exception $e) {
                return "sin conexion"; //sin conexion al LDAP
           }
    }

    public function ppauth_procedure($model, $controlador){
             //validar con webservice
            if ($model->username != "admin") {
                $is_not_emptyLdap = $this->ppauth_authenticate_against_ldap($model->username,$model->password);
            }else{
                $is_not_emptyLdap = "sin conexion"; //El usuario admin es un usuario que no necesita conexion con LDAP
            }
              $user = CrugeFactoryLdap::get()->getICrugeStoredUserByUsername($model->username);
            

            if ($is_not_emptyLdap) {
                 $role_default = 'invitado';
                 if ($user == null ) {
                     if ( $is_not_emptyLdap != "sin conexion" ) {
                         $mapped_values = array();
                         $mapped_values['username'] = $model->username;
                         $mapped_values['password'] = $model->password;
                         $mapped_values['email'] = $model->username."@cantv.com.ve";
                         Yii::app()->userManagerLdap->um->createNewUserPassword($mapped_values,false);
                              $this->ppauth_authorization_against_ldap($model->username, $model->password,  $is_not_emptyLdap, $role_default);
                      }
                 }else{
                     if ( $is_not_emptyLdap != "sin conexion" ) {
                        Yii::app()->authManagerLdap->revokeAll($user['iduser']);
                        Yii::app()->userManagerLdap->um->changePassword($user, $model->password);
                        Yii::app()->userManagerLdap->um->save($user);
                            $this->ppauth_authorization_against_ldap($model->username, $model->password,  $is_not_emptyLdap, $role_default);
                     }
                 }

                if ($model->validate()) {
                    if ($model->login(false) == true) {

                        Yii::log(__CLASS__ . "\nCrugeLogon->login() returns true\n", "info");

                        // a modo de conocimiento, Yii::app()->user->returnUrl es
                        // establecida automaticamente por CAccessControlFilter cuando
                        // preFilter llama a accessDenied quien a su vez llama a
                        // CWebUser::loginRequired que es donde finalmente se llama a setReturnUrl
                        $controlador->redirect(Yii::app()->user->returnUrl);
                    } else {
                        Yii::app()->user->setFlash('loginflash', Yii::app()->user->getLastError());
                    }
                } else {
                    Yii::log(
                        __CLASS__ . "\nCrugeUser->validate es false\n" . CHtml::errorSummary($model)
                        ,
                        "error"
                    );
                }
            }else{
                Yii::app()->user->setFlash('loginflash', 'Usuario o contraseña incorrecta');
            }
    }
}

?>
