<?php

/**
 * This is the model class for table "base_org".
 *
 * The followings are the available columns in table 'base_org':
 * @property integer $id_org
 * @property integer $co_org
 * @property integer $co_org_dpnd
 * @property string $co_org_rrhh
 * @property string $co_org_dpnd_rrhh
 * @property string $ceco
 * @property string $nb_org
 * @property string $tx_descripcion
 * @property string $abv_org
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 */
class BaseOrg extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base_org';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_org, tx_descripcion', 'required'),
			array('co_org, co_org_dpnd', 'numerical', 'integerOnly'=>true),
			array('co_org_rrhh, co_org_dpnd_rrhh, ceco', 'length', 'max'=>30),
			array('nb_org', 'length', 'max'=>128),
			array('tx_descripcion', 'length', 'max'=>250),
			array('abv_org, usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),

            //Valida unique key
            array('co_org', 'unique', 'attributeName'=>'co_org'),

            //Valida foreing key
            array('co_org_dpnd', 'exist',
                    'allowEmpty' => true,
                    'attributeName' => 'co_org',
                    'className' => 'BaseOrg',
                    'message' => 'El codigo especificado no existe.',
                    'skipOnError'=>true
                    ),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_org, co_org, co_org_dpnd, co_org_rrhh, co_org_dpnd_rrhh, ceco, nb_org, tx_descripcion, abv_org, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'asigorgs' => array(self::HAS_MANY, 'BaseAsigOrg', 'co_org'),
			'coOrgDpnd' => array(self::BELONGS_TO, 'BaseOrg', 'co_org_dpnd'),
            'orgs' => array(self::HAS_MANY, 'BaseOrg', 'co_org_dpnd'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_org' => 'Id Org',
			'co_org' => 'Codigo Organizacion',
			'co_org_dpnd' => 'Codigo Dependencia',
			'co_org_rrhh' => 'Codigo Unidad RRHH',
			'co_org_dpnd_rrhh' => 'Codigo Dependencia Unidad RRHH',
			'ceco' => 'Ceco',
			'nb_org' => 'Organizacion',
			'tx_descripcion' => 'Descripcion',
			'abv_org' => 'Abreviatura',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'MOdificado por',
			'in_stat' => 'Estatus',
			'tx_desc' => 'Observaciones',
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

		$criteria->compare('id_org',$this->id_org);
		$criteria->compare('co_org',$this->co_org);
		$criteria->compare('co_org_dpnd',$this->co_org_dpnd);
		$criteria->compare('co_org_rrhh',$this->co_org_rrhh,true);
		$criteria->compare('co_org_dpnd_rrhh',$this->co_org_dpnd_rrhh,true);
		$criteria->compare('ceco',$this->ceco,true);
		$criteria->compare('nb_org',$this->nb_org,true);
		$criteria->compare('tx_descripcion',$this->tx_descripcion,true);
		$criteria->compare('abv_org',$this->abv_org,true);
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
	 * @return BaseOrg the static model class
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
            if($this->co_org==null || $this->co_org==0 ||  $this->co_org=='')
                $this->co_org=1001;

            if($this->isNewRecord)
            {
                  $maxCoOrg = Yii::app()->db->createCommand()
                   ->select('max(co_org) as max')
                   ->from('base_org')
                   ->queryScalar();

                  $this->co_org = $maxCoOrg + 1;

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
