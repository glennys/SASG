<?php

/**
 * This is the model class for table "auditoria.naturaleza_observacion".
 *
 * The followings are the available columns in table 'auditoria.naturaleza_observacion':
 * @property integer $id_naturaleza
 * @property integer $id_observaciones
 * @property integer $id_unidad
 * @property string $fecha_observacion
 * @property integer $id_actividad
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property ObservacionesUnidadConsultor $idObservaciones
 * @property ObservacionesUnidadConsultor $idUnidad
 * @property ObservacionesUnidadConsultor $fechaObservacion
 * @property ObservacionesUnidadConsultor $idActividad
 * @property Naturaleza $idNaturaleza
 */
class NaturalezaObservacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.naturaleza_observacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_naturaleza, id_observaciones, id_unidad, fecha_observacion, id_actividad, descripcion', 'required'),
			array('id_naturaleza, id_observaciones, id_unidad, id_actividad', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_naturaleza, id_observaciones, id_unidad, fecha_observacion, id_actividad, descripcion', 'safe', 'on'=>'search'),
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
			'idObservaciones' => array(self::BELONGS_TO, 'ObservacionesUnidadConsultor', 'id_observaciones'),
			'idUnidad' => array(self::BELONGS_TO, 'ObservacionesUnidadConsultor', 'id_unidad'),
			'fechaObservacion' => array(self::BELONGS_TO, 'ObservacionesUnidadConsultor', 'fecha_observacion'),
			'idActividad' => array(self::BELONGS_TO, 'ObservacionesUnidadConsultor', 'id_actividad'),
			'idNaturaleza' => array(self::BELONGS_TO, 'Naturaleza', 'id_naturaleza'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_naturaleza' => 'Id Naturaleza',
			'id_observaciones' => 'Id Observaciones',
			'id_unidad' => 'Id Unidad',
			'fecha_observacion' => 'Fecha Observacion',
			'id_actividad' => 'Id Actividad',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('id_naturaleza',$this->id_naturaleza);
		$criteria->compare('id_observaciones',$this->id_observaciones);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('fecha_observacion',$this->fecha_observacion,true);
		$criteria->compare('id_actividad',$this->id_actividad);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NaturalezaObservacion the static model class
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
