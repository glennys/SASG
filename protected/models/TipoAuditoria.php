<?php

/**
 * This is the model class for table "auditoria.tipo_auditoria".
 *
 * The followings are the available columns in table 'auditoria.tipo_auditoria':
 * @property integer $id_tipo_auditoria
 * @property string $descripcion
 * @property boolean $activo
 * @property string $abreviatura_tipo_auditoria
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 *
 * The followings are the available model relations:
 * @property Informe[] $informes
 */
class TipoAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.tipo_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, activo', 'required'),
			array('descripcion', 'length', 'max'=>255),
			array('abreviatura_tipo_auditoria', 'length', 'max'=>10),
			array('fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo_auditoria, descripcion, activo, abreviatura_tipo_auditoria, fecha_creacion, fecha_actualizacion', 'safe', 'on'=>'search'),
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
			'informes' => array(self::HAS_MANY, 'Informe', 'id_tipo_auditoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_auditoria' => 'Id Tipo Auditoria',
			'descripcion' => 'Descripcion',
			'activo' => 'Activo',
			'abreviatura_tipo_auditoria' => 'Abreviatura Tipo Auditoria',
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

		$criteria->compare('id_tipo_auditoria',$this->id_tipo_auditoria);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('abreviatura_tipo_auditoria',$this->abreviatura_tipo_auditoria,true);
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
	 * @return TipoAuditoria the static model class
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
