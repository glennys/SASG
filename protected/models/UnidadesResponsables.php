<?php

/**
 * This is the model class for table "auditoria.unidades_responsables".
 *
 * The followings are the available columns in table 'auditoria.unidades_responsables':
 * @property integer $id_unidad
 * @property integer $id_observaciones
 * @property string $fecha_creacion
 * @property string $nombre_responsable
 * @property string $telefono
 * @property string $unidades_involucradas
 * @property string $fecha_inicio_estimada
 * @property string $fecha_fin_estimada
 * @property string $indicador_logro
 * @property string $evento
 * @property string $correo
 * @property string $unidades_apoyo
 * @property integer $id_estado
 */
class UnidadesResponsables extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.unidades_responsables';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_unidad, id_observaciones, fecha_creacion, nombre_responsable, telefono, unidades_involucradas, fecha_inicio_estimada, fecha_fin_estimada, indicador_logro, evento, correo, unidades_apoyo, id_estado', 'required'),
			array('id_unidad, id_observaciones, id_estado', 'numerical', 'integerOnly'=>true),
			array('nombre_responsable, telefono, unidades_involucradas, indicador_logro, evento, correo, unidades_apoyo', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_unidad, id_observaciones, fecha_creacion, nombre_responsable, telefono, unidades_involucradas, fecha_inicio_estimada, fecha_fin_estimada, indicador_logro, evento, correo, unidades_apoyo, id_estado', 'safe', 'on'=>'search'),
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
			'id_unidad' => 'Id Unidad',
			'id_observaciones' => 'Id Observaciones',
			'fecha_creacion' => 'Fecha Creacion',
			'nombre_responsable' => 'Nombre Responsable',
			'telefono' => 'Telefono',
			'unidades_involucradas' => 'Unidades Involucradas',
			'fecha_inicio_estimada' => 'Fecha Inicio Estimada',
			'fecha_fin_estimada' => 'Fecha Fin Estimada',
			'indicador_logro' => 'Indicador Logro',
			'evento' => 'Evento',
			'correo' => 'Correo',
			'unidades_apoyo' => 'Unidades Apoyo',
			'id_estado' => 'Id Estado',
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

		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_observaciones',$this->id_observaciones);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('nombre_responsable',$this->nombre_responsable,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('unidades_involucradas',$this->unidades_involucradas,true);
		$criteria->compare('fecha_inicio_estimada',$this->fecha_inicio_estimada,true);
		$criteria->compare('fecha_fin_estimada',$this->fecha_fin_estimada,true);
		$criteria->compare('indicador_logro',$this->indicador_logro,true);
		$criteria->compare('evento',$this->evento,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('unidades_apoyo',$this->unidades_apoyo,true);
		$criteria->compare('id_estado',$this->id_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UnidadesResponsables the static model class
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
