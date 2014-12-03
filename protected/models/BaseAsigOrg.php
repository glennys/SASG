<?php

/**
 * This is the model class for table "base_asig_org".
 *
 * The followings are the available columns in table 'base_asig_org':
 * @property integer $id_asig_org
 * @property integer $co_asig_org
 * @property integer $nu_docm_idnt
 * @property integer $co_org
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 */
class BaseAsigOrg extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base_asig_org';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_docm_idnt, co_org', 'required'),
			array('co_asig_org, nu_docm_idnt, co_org', 'numerical', 'integerOnly'=>true),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),

            //Valida foreing key
            array('nu_docm_idnt', 'exist',
                    'allowEmpty' => true,
                    'attributeName' => 'nu_docm_idnt',
                    'className' => 'BaseEmpleados',
                    'message' => 'El número de cédula no existe',
                    'skipOnError'=>true
                    ),
            array('co_org', 'exist',
                    'allowEmpty' => true,
                    'attributeName' => 'co_org',
                    'className' => 'BaseOrg',
                    'message' => 'La Organización no existe',
                    'skipOnError'=>true
                    ),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_asig_org, co_asig_org, nu_docm_idnt, co_org, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'coOrg' => array(self::BELONGS_TO, 'BaseOrg', 'co_org'),
			'nuDocmIdnt' => array(self::BELONGS_TO, 'BaseEmpleados', 'nu_docm_idnt'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_asig_org' => 'Id Asig Org',
			'co_asig_org' => 'Co Asig Org',
			'nu_docm_idnt' => 'Nu Docm Idnt',
			'co_org' => 'Co Org',
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

		$criteria->compare('id_asig_org',$this->id_asig_org);
		$criteria->compare('co_asig_org',$this->co_asig_org);
		$criteria->compare('nu_docm_idnt',$this->nu_docm_idnt);
		$criteria->compare('co_org',$this->co_org);
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
	 * @return BaseAsigOrg the static model class
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
                if($this->co_asig_org==null || $this->co_asig_org==0 ||  $this->co_asig_org=='')
                    $this->co_asig_org=1;

                //Busco el ultimo co_asig_org
                $maxCoAsigOrg = Yii::app()->db->createCommand()
                    ->select('max(co_asig_org) as max')
                    ->from('base_asig_org')
                    ->queryScalar();

                $newCoAsigOrg = $maxCoAsigOrg + 1;

                if($this->isNewRecord)
                {
                    $this->usr_crea = Yii::app()->user->name;
                    $this->co_asig_org=$newCoAsigOrg;

                }else{

                    //busco el ultimo co_org
                    $oldCoOrg = Yii::app()->db->createCommand()
                                ->select('co_org')
                                ->from('base_asig_org')
                                ->where('co_asig_org=:co_asig_org',array(':co_asig_org'=>$this->co_asig_org))
                                ->queryScalar();

                    if($this->co_org!=$oldCoOrg){
                        //agrego el registro actual con estatus en I
                        $oldAsigOrg = new BaseAsigOrg();
                        $oldAsigOrg->co_asig_org  = $newCoAsigOrg;
                        $oldAsigOrg->co_org = $oldCoOrg;
                        $oldAsigOrg->nu_docm_idnt = $this->nu_docm_idnt;
                        $oldAsigOrg->fe_crea = $this->fe_crea;
                        $oldAsigOrg->fe_modf = $this->fe_modf;
                        $oldAsigOrg->usr_crea = $this->usr_crea;
                        $oldAsigOrg->in_stat = 'I';
                        $oldAsigOrg->usr_modf = Yii::app()->user->id;
                        $oldAsigOrg->save();
                    }

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
