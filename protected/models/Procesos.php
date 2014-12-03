<?php

/**
 * This is the model class for table "auditoria.procesos".
 *
 * The followings are the available columns in table 'auditoria.procesos':
 * @property integer $id_proceso
 * @property integer $parent_id_proceso
 * @property string $nombre_proceso
 * @property string $descripcion_proceso
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 *
 * The followings are the available model relations:
 * @property Procesos $parentIdProceso
 * @property Procesos[] $procesoses
 * @property Observaciones[] $auditoria.observaciones
 */
class Procesos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.procesos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_proceso, descripcion_proceso', 'required'),
			array('parent_id_proceso', 'numerical', 'integerOnly'=>true),
			array('nombre_proceso, descripcion_proceso', 'length', 'max'=>255),
			array('fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proceso, parent_id_proceso, nombre_proceso, descripcion_proceso, fecha_creacion, fecha_actualizacion', 'safe', 'on'=>'search'),
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
			'parentIdProceso' => array(self::BELONGS_TO, 'Procesos', 'parent_id_proceso'),
			'procesoses' => array(self::HAS_MANY, 'Procesos', 'parent_id_proceso'),
			'auditoria.observaciones' => array(self::MANY_MANY, 'Observaciones', 'estado_observaciones(id_proceso, id_observaciones)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proceso' => 'Id Proceso',
			'parent_id_proceso' => 'Parent Id Proceso',
			'nombre_proceso' => 'Nombre Proceso',
			'descripcion_proceso' => 'Descripcion Proceso',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_actualizacion' => 'Fecha Actualizacion',
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

		$criteria->compare('id_proceso',$this->id_proceso);
		$criteria->compare('parent_id_proceso',$this->parent_id_proceso);
		$criteria->compare('nombre_proceso',$this->nombre_proceso,true);
		$criteria->compare('descripcion_proceso',$this->descripcion_proceso,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Procesos the static model class
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
