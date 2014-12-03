<?php

/**
 * This is the model class for table "auditoria.tipo_observacion".
 *
 * The followings are the available columns in table 'auditoria.tipo_observacion':
 * @property integer $id_tipo
 * @property string $descripcion
 * @property boolean $activo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property Observaciones[] $observaciones
 */
class TipoObservacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.tipo_observacion';
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
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('activo, fecha_creacion, fecha_actualizacion, fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo, descripcion, activo, fecha_creacion, fecha_actualizacion, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'observaciones' => array(self::HAS_MANY, 'Observaciones', 'id_tipo_observacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo' => 'Id Tipo',
			'descripcion' => 'Descripcion',
			'activo' => 'Activo',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'in_stat' => 'In Stat',
			'usr_crea' => 'Usr Crea',
			'fe_crea' => 'Fe Crea',
			'usr_modf' => 'Usr Modf',
			'fe_modf' => 'Fe Modf',
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

		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoObservacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
