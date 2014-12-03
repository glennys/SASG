<?php

/**
 * This is the model class for table "base_empleados".
 *
 * The followings are the available columns in table 'base_empleados':
 * @property integer $id_usuario
 * @property integer $nu_docm_idnt
 * @property integer $nu_docm_idnt_supv
 * @property string $username
 * @property string $nb_pers
 * @property string $email
 * @property integer $ldap_login
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 */
class BaseEmpleados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base_empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_docm_idnt, username, nb_pers', 'required'),
			array('nu_docm_idnt, nu_docm_idnt_supv, ldap_login', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>128),
			array('nb_pers, tx_desc', 'length', 'max'=>100),
			array('email', 'length', 'max'=>50),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('fe_crea, fe_modf', 'safe'),

            //valida formato de email
            array('email', 'email'),

            //valiida unique key
            array('nu_docm_idnt', 'unique', 'attributeName'=>'nu_docm_idnt'),
            array('username', 'unique', 'attributeName'=>'username'),

            //Valida foreing key
            array('nu_docm_idnt_supv', 'exist',
                    'allowEmpty' => true,
                    'attributeName' => 'nu_docm_idnt',
                    'className' => 'BaseEmpleados',
                    'message' => 'El número de cédula no existe',
                    'skipOnError'=>true
                    ),
           array('username', 'exist',
                    'allowEmpty' => true,
                    'attributeName' => 'username',
                    'className' => 'TablaCrugeUser',
                    'message' => 'El username aun no se ha creado en el sistema',
                    'skipOnError'=>true
                    ),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, nu_docm_idnt, nu_docm_idnt_supv, username, nb_pers, email, ldap_login, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'AsigOrgs' => array(self::HAS_MANY, 'BaseAsigOrg', 'nu_docm_idnt'),
			'username0' => array(self::BELONGS_TO, 'TablaCrugeUser', 'username'),
			'nuDocmIdntSupv' => array(self::BELONGS_TO, 'BaseEmpleados', 'nu_docm_idnt_supv'),
			'empleadoses' => array(self::HAS_MANY, 'BaseEmpleados', 'nu_docm_idnt_supv'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'nu_docm_idnt' => 'cedula',
			'nu_docm_idnt_supv' => 'Nu Docm Idnt Supv',
			'username' => 'Username',
			'nb_pers' => 'Nb Pers',
			'email' => 'Email',
			'ldap_login' => 'Ldap Login',
			'fe_crea' => 'Fe Crea',
			'fe_modf' => 'Fe Modf',
			'usr_crea' => 'Usr Crea',
			'usr_modf' => 'Usr Modf',
			'in_stat' => 'In Stat',
			'tx_desc' => 'Tx Desc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nu_docm_idnt',$this->nu_docm_idnt);
		$criteria->compare('nu_docm_idnt_supv',$this->nu_docm_idnt_supv);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nb_pers',$this->nb_pers,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ldap_login',$this->ldap_login);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BaseEmpleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

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


    public function beforeSave()
    {

      if (parent::beforeSave())
      {

          if($this->isNewRecord)
           {
              $this->usr_crea = Yii::app()->user->name;
            }else{
                $this->usr_modf = Yii::app()->user->name;
            }

           return true;
       }
       else
       return false;
    }

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
        );
    }
}
