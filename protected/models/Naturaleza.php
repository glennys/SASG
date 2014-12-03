<?php

/**
 * This is the model class for table "auditoria.naturaleza".
 *
 * The followings are the available columns in table 'auditoria.naturaleza':
 * @property integer $id_naturaleza
 * @property integer $parent_id_naturaleza
 * @property string $descripcion
 * @property boolean $activo
 * @property integer $tipo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 *
 * The followings are the available model relations:
 * @property Observaciones[] $observaciones
 * @property NaturalezaObservacion[] $naturalezaObservacions
 * @property Naturaleza $parentIdNaturaleza
 * @property Naturaleza[] $naturalezas
 */
class Naturaleza extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.naturaleza';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id_naturaleza, descripcion, activo, tipo', 'required'),
			array('parent_id_naturaleza, tipo', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			array('fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_naturaleza, parent_id_naturaleza, descripcion, activo, tipo, fecha_creacion, fecha_actualizacion', 'safe', 'on'=>'search'),
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
			'observaciones' => array(self::HAS_MANY, 'Observaciones', 'id_naturaleza'),
			'naturalezaObservacions' => array(self::HAS_MANY, 'NaturalezaObservacion', 'id_naturaleza'),
			'parentIdNaturaleza' => array(self::BELONGS_TO, 'Naturaleza', 'parent_id_naturaleza'),
			'naturalezas' => array(self::HAS_MANY, 'Naturaleza', 'parent_id_naturaleza'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_naturaleza' => 'Id Naturaleza',
			'parent_id_naturaleza' => 'Parent Id Naturaleza',
			'descripcion' => 'Descripcion',
			'activo' => 'Activo',
			'tipo' => 'Tipo',
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

		$criteria->compare('id_naturaleza',$this->id_naturaleza);
		$criteria->compare('parent_id_naturaleza',$this->parent_id_naturaleza);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('tipo',$this->tipo);
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
	 * @return Naturaleza the static model class
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
