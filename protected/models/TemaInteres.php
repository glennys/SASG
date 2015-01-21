<?php

/**
 * This is the model class for table "auditoria.tema_interes".
 *
 * The followings are the available columns in table 'auditoria.tema_interes':
 * @property integer $id_tema
 * @property string $descripcion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 */
class TemaInteres extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.tema_interes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion', 'length', 'max'=>255),
			//array('in_stat', 'length', 'max'=>1),
			//array('usr_crea, usr_modf', 'length', 'max'=>10),
			//array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tema, descripcion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tema' => 'Id Tema',
			'descripcion' => 'Descripcion',
			/*'in_stat' => 'In Stat',
			'usr_crea' => 'Usr Crea',
			'fe_crea' => 'Fe Crea',
			'usr_modf' => 'Usr Modf',
			'fe_modf' => 'Fe Modf',*/
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

		$criteria->compare('id_tema',$this->id_tema);
		$criteria->compare('descripcion',$this->descripcion,true);
		/*$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TemaInteres the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
