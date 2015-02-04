<?php

/**
 * This is the model class for table "auditoria.observaciones_auditor".
 *
 * The followings are the available columns in table 'auditoria.observaciones_auditor':
 * @property integer $id_auditor
 * @property string $fecha_asignacion
 * @property integer $otro
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Observaciones[] $observaciones0
 */
class ObservacionesAuditor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.observaciones_auditor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('otro', 'numerical', 'integerOnly'=>true),
			//array('in_stat', 'length', 'max'=>1),
			//array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('observaciones', 'length', 'max'=>255),
			array('fecha_asignacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_auditor, fecha_asignacion, otro, observaciones', 'safe', 'on'=>'search'),
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
			'observaciones0' => array(self::HAS_MANY, 'Observaciones', 'id_auditor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'id_auditor' => 'Id Auditor',
			'fecha_asignacion' => 'Fecha Asignacion',
			'observaciones' => 'Observaciones',
			'otro' => 'Otro',
			
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

		$criteria->compare('id_auditor',$this->id_auditor);
		$criteria->compare('fecha_asignacion',$this->fecha_asignacion,true);
		$criteria->compare('otro',$this->otro);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ObservacionesAuditor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
