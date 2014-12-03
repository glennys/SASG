<?php

/**
 * This is the model class for table "auditoria.estado".
 *
 * The followings are the available columns in table 'auditoria.estado':
 * @property integer $id_estado
 * @property string $descripcion
 * @property boolean $activo
 * @property string $notificacion
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $tipo_notificacion
 *
 * The followings are the available model relations:
 * @property Informe[] $informes
 * @property Observaciones[] $observaciones
 * @property Informe[] $auditoria.informes
 * @property ObservacionesUnidadConsultor[] $observacionesUnidadConsultors
 */
class Estado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.estado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, activo, notificacion', 'required'),
			array('tipo_notificacion', 'numerical', 'integerOnly'=>true),
			array('descripcion, notificacion', 'length', 'max'=>255),
			//array('fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_estado, descripcion, activo, notificacion, tipo_notificacion', 'safe', 'on'=>'search'),
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
			'informes' => array(self::HAS_MANY, 'Informe', 'id_estado'),
			'observaciones' => array(self::HAS_MANY, 'Observaciones', 'id_estado'),
			'auditoria.informes' => array(self::MANY_MANY, 'Informe', 'estado_informe(id_estado, id_informe)'),
			'observacionesUnidadConsultors' => array(self::HAS_MANY, 'ObservacionesUnidadConsultor', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estado' => 'Id Estado',
			'descripcion' => 'Descripcion',
			'activo' => 'Activo',
			'notificacion' => 'Notificacion',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'tipo_notificacion' => 'Tipo Notificacion',
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

		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('notificacion',$this->notificacion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('tipo_notificacion',$this->tipo_notificacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estado the static model class
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
