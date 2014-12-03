<?php

/**
 * This is the model class for table "auditoria.rol".
 *
 * The followings are the available columns in table 'auditoria.rol':
 * @property integer $id_rol
 * @property integer $parent_id_rol
 * @property string $descripcion
 * @property boolean $activo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 *
 * The followings are the available model relations:
 * @property Empleado[] $auditoria.empleados
 * @property Modulo[] $auditoria.modulos
 * @property Rol $parentIdRol
 * @property Rol[] $rols
 */
class Rol extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.rol';
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
			array('parent_id_rol', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			array('fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rol, parent_id_rol, descripcion, activo, fecha_creacion, fecha_actualizacion', 'safe', 'on'=>'search'),
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
			'auditoria.empleados' => array(self::MANY_MANY, 'Empleado', 'empleado_rol(id_rol, id_empleado)'),
			'auditoria.modulos' => array(self::MANY_MANY, 'Modulo', 'rol_modulos(id_rol, id_permisos)'),
			'parentIdRol' => array(self::BELONGS_TO, 'Rol', 'parent_id_rol'),
			'rols' => array(self::HAS_MANY, 'Rol', 'parent_id_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rol' => 'Id Rol',
			'parent_id_rol' => 'Parent Id Rol',
			'descripcion' => 'Descripcion',
			'activo' => 'Activo',
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

		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('parent_id_rol',$this->parent_id_rol);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);
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
	 * @return Rol the static model class
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
