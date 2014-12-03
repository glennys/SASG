<?php

/**
 * This is the model class for table "auditoria.modulo".
 *
 * The followings are the available columns in table 'auditoria.modulo':
 * @property integer $id_permisos
 * @property string $nombre_modulo
 * @property string $tipo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $parent_id_permisos
 *
 * The followings are the available model relations:
 * @property Rol[] $auditoria.rols
 * @property Operaciones[] $auditoria.operaciones
 * @property Modulo $parentIdPermisos
 * @property Modulo[] $modulos
 */
class Modulo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.modulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_modulo', 'required'),
			array('parent_id_permisos', 'numerical', 'integerOnly'=>true),
			array('nombre_modulo, tipo', 'length', 'max'=>255),
			//array('fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_permisos, nombre_modulo, tipo, parent_id_permisos', 'safe', 'on'=>'search'),
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
			'auditoria.rols' => array(self::MANY_MANY, 'Rol', 'rol_modulos(id_permisos, id_rol)'),
			'auditoria.operaciones' => array(self::MANY_MANY, 'Operaciones', 'modulo_operaciones(id_permisos, id_operaciones)'),
			'parentIdPermisos' => array(self::BELONGS_TO, 'Modulo', 'parent_id_permisos'),
			'modulos' => array(self::HAS_MANY, 'Modulo', 'parent_id_permisos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_permisos' => 'Id Permisos',
			'nombre_modulo' => 'Nombre Modulo',
			'tipo' => 'Tipo',
			//'fecha_creacion' => 'Fecha Creacion',
			//'fecha_actualizacion' => 'Fecha Actualizacion',
			'parent_id_permisos' => 'Parent Id Permisos',
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

		$criteria->compare('id_permisos',$this->id_permisos);
		$criteria->compare('nombre_modulo',$this->nombre_modulo,true);
		$criteria->compare('tipo',$this->tipo,true);
		//$criteria->compare('fecha_creacion',$this->fecha_creacion,false);
		//$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,false);
		$criteria->compare('parent_id_permisos',$this->parent_id_permisos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modulo the static model class
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
