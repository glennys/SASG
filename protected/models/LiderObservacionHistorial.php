<?php

/**
 * This is the model class for table "auditoria.lider_observacion_historial".
 *
 * The followings are the available columns in table 'auditoria.lider_observacion_historial':
 * @property integer $id_observacion
 * @property integer $id_supervisor
 * @property string $fecha_asignacion
 * @property integer $otro
 *
 * The followings are the available model relations:
 * @property Observaciones $idObservacion
 * @property Empleado $idSupervisor
 */
class LiderObservacionHistorial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.lider_observacion_historial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_observacion, id_supervisor, fecha_asignacion', 'required'),
			array('id_observacion, id_supervisor, otro', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observacion, id_supervisor, fecha_asignacion, otro', 'safe', 'on'=>'search'),
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
			'idObservacion' => array(self::BELONGS_TO, 'Observaciones', 'id_observacion'),
			'idSupervisor' => array(self::BELONGS_TO, 'Empleado', 'id_supervisor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_observacion' => 'Id Observacion',
			'id_supervisor' => 'Id Supervisor',
			'fecha_asignacion' => 'Fecha Asignacion',
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

		$criteria->compare('id_observacion',$this->id_observacion);
		$criteria->compare('id_supervisor',$this->id_supervisor);
		$criteria->compare('fecha_asignacion',$this->fecha_asignacion,true);
		$criteria->compare('otro',$this->otro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LiderObservacionHistorial the static model class
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
        );
    }
}
