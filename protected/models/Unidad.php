<?php

/**
 * This is the model class for table "auditoria.unidad".
 *
 * The followings are the available columns in table 'auditoria.unidad':
 * @property integer $id_unidad
 * @property integer $parent_id_unidad
 * @property string $descripcion
 * @property integer $orden
 * @property string $nombre_supervisor_unidad
 * @property string $extension_supervisor_unidad
 * @property string $celular_supervisor_ldap
 * @property string $descripcion_unidad_ldap
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property Actividad[] $actividads
 * @property Observaciones[] $observaciones
 * @property Unidad $parentIdUnidad
 * @property Unidad[] $unidads
 * @property Observaciones[] $auditoria.observaciones
 * @property Observaciones[] $auditoria.observaciones1
 * @property ObservacionesUnidadConsultor[] $observacionesUnidadConsultors
 * @property Empleado[] $empleados
 * @property Observaciones[] $auditoria.observaciones2
 */
class Unidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.unidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion', 'required'),
			array('parent_id_unidad, orden', 'numerical', 'integerOnly'=>true),
			array('descripcion, nombre_supervisor_unidad, extension_supervisor_unidad, celular_supervisor_ldap, descripcion_unidad_ldap', 'length', 'max'=>255),
			//array('in_stat', 'length', 'max'=>1),
			//array('usr_crea, usr_modf', 'length', 'max'=>10),
			//array('fecha_creacion, fecha_actualizacion, fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_unidad, parent_id_unidad, descripcion, orden, nombre_supervisor_unidad, extension_supervisor_unidad, celular_supervisor_ldap, descripcion_unidad_ldap', 'safe', 'on'=>'search'),
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
			'actividads' => array(self::HAS_MANY, 'Actividad', 'id_unidad'),
			'observaciones' => array(self::HAS_MANY, 'Observaciones', 'id_unidad'),
			'parentIdUnidad' => array(self::BELONGS_TO, 'Unidad', 'parent_id_unidad'),
			'unidads' => array(self::HAS_MANY, 'Unidad', 'parent_id_unidad'),
			'auditoria.observaciones' => array(self::MANY_MANY, 'Observaciones', 'unidades_responsables(id_unidad, id_observaciones)'),
			'auditoria.observaciones1' => array(self::MANY_MANY, 'Observaciones', 'lideres_observacion(id_unidad, id_observacion)'),
			'observacionesUnidadConsultors' => array(self::HAS_MANY, 'ObservacionesUnidadConsultor', 'id_unidad'),
			'empleados' => array(self::HAS_MANY, 'Empleado', 'id_unidad'),
			'auditoria.observaciones2' => array(self::MANY_MANY, 'Observaciones', 'observaciones_unidad(id_unidades, id_observaciones)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_unidad' => 'Id Unidad',
			'parent_id_unidad' => 'Parent Id Unidad',
			'descripcion' => 'Descripcion',
			'orden' => 'Orden',
			'nombre_supervisor_unidad' => 'Nombre Supervisor Unidad',
			'extension_supervisor_unidad' => 'Extension Supervisor Unidad',
			'celular_supervisor_ldap' => 'Celular Supervisor Ldap',
			'descripcion_unidad_ldap' => 'Descripcion Unidad Ldap',
			/*'fecha_creacion' => 'Fecha Creacion',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'in_stat' => 'In Stat',
			'usr_crea' => 'Usr Crea',
			'fe_crea' => 'Fe Crea',
			'usr_modf' => 'Usr Modf',
			'fe_modf' => 'Fe Modf',*/
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
		$criteria->compare('parent_id_unidad',$this->parent_id_unidad);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('nombre_supervisor_unidad',$this->nombre_supervisor_unidad,true);
		$criteria->compare('extension_supervisor_unidad',$this->extension_supervisor_unidad,true);
		$criteria->compare('celular_supervisor_ldap',$this->celular_supervisor_ldap,true);
		$criteria->compare('descripcion_unidad_ldap',$this->descripcion_unidad_ldap,true);
		/*$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
