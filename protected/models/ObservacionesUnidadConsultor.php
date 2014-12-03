<?php

/**
 * This is the model class for table "auditoria.observaciones_unidad_consultor".
 *
 * The followings are the available columns in table 'auditoria.observaciones_unidad_consultor':
 * @property integer $id_observaciones
 * @property integer $id_unidad
 * @property string $fecha_observacion
 * @property integer $id_actividad
 * @property string $fecha_seguimiento
 * @property string $propietario
 * @property integer $id_empleado
 * @property integer $id_estado
 * @property string $avance
 *
 * The followings are the available model relations:
 * @property Empleado $idEmpleado
 * @property Observaciones $idObservaciones
 * @property Unidad $idUnidad
 * @property Estado $idEstado
 * @property Actividad $idActividad
 * @property NaturalezaObservacion[] $naturalezaObservacions
 * @property NaturalezaObservacion[] $naturalezaObservacions1
 * @property NaturalezaObservacion[] $naturalezaObservacions2
 * @property NaturalezaObservacion[] $naturalezaObservacions3
 */
class ObservacionesUnidadConsultor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.observaciones_unidad_consultor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_observaciones, id_unidad, fecha_observacion, id_actividad, id_empleado, id_estado, avance', 'required'),
			array('id_observaciones, id_unidad, id_actividad, id_empleado, id_estado', 'numerical', 'integerOnly'=>true),
			array('propietario, avance', 'length', 'max'=>255),
			array('fecha_seguimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observaciones, id_unidad, fecha_observacion, id_actividad, fecha_seguimiento, propietario, id_empleado, id_estado, avance', 'safe', 'on'=>'search'),
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
			'idEmpleado' => array(self::BELONGS_TO, 'Empleado', 'id_empleado'),
			'idObservaciones' => array(self::BELONGS_TO, 'Observaciones', 'id_observaciones'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'idActividad' => array(self::BELONGS_TO, 'Actividad', 'id_actividad'),
			'naturalezaObservacions' => array(self::HAS_MANY, 'NaturalezaObservacion', 'id_observaciones'),
			'naturalezaObservacions1' => array(self::HAS_MANY, 'NaturalezaObservacion', 'id_unidad'),
			'naturalezaObservacions2' => array(self::HAS_MANY, 'NaturalezaObservacion', 'fecha_observacion'),
			'naturalezaObservacions3' => array(self::HAS_MANY, 'NaturalezaObservacion', 'id_actividad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_observaciones' => 'Id Observaciones',
			'id_unidad' => 'Id Unidad',
			'fecha_observacion' => 'Fecha Observacion',
			'id_actividad' => 'Id Actividad',
			'fecha_seguimiento' => 'Fecha Seguimiento',
			'propietario' => 'Propietario',
			'id_empleado' => 'Id Empleado',
			'id_estado' => 'Id Estado',
			'avance' => 'Avance',
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

		$criteria->compare('id_observaciones',$this->id_observaciones);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('fecha_observacion',$this->fecha_observacion,true);
		$criteria->compare('id_actividad',$this->id_actividad);
		$criteria->compare('fecha_seguimiento',$this->fecha_seguimiento,true);
		$criteria->compare('propietario',$this->propietario,true);
		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('avance',$this->avance,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ObservacionesUnidadConsultor the static model class
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
