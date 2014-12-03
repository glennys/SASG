<?php

/**
 * This is the model class for table "auditoria.lideres_observacion".
 *
 * The followings are the available columns in table 'auditoria.lideres_observacion':
 * @property integer $id_observacion
 * @property integer $id_unidad
 * @property integer $id_empleado_supervisor
 * @property boolean $aprobacion
 * @property string $fecha_asignacion
 */
class LideresObservacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.lideres_observacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_observacion, id_unidad, id_empleado_supervisor, aprobacion', 'required'),
			array('id_observacion, id_unidad, id_empleado_supervisor', 'numerical', 'integerOnly'=>true),
			array('fecha_asignacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observacion, id_unidad, id_empleado_supervisor, aprobacion, fecha_asignacion', 'safe', 'on'=>'search'),
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
			'id_observacion' => 'Id Observacion',
			'id_unidad' => 'Id Unidad',
			'id_empleado_supervisor' => 'Id Empleado Supervisor',
			'aprobacion' => 'Aprobacion',
			'fecha_asignacion' => 'Fecha Asignacion',
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
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_empleado_supervisor',$this->id_empleado_supervisor);
		$criteria->compare('aprobacion',$this->aprobacion);
		$criteria->compare('fecha_asignacion',$this->fecha_asignacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LideresObservacion the static model class
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
