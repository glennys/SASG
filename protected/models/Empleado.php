<?php

/**
 * This is the model class for table "auditoria.empleado".
 *
 * The followings are the available columns in table 'auditoria.empleado':
 * @property integer $id_empleado
 * @property integer $id_unidad
 * @property string $primerapellido_empleado
 * @property string $segundoapellido_empleado
 * @property string $nombrecompleto_empleado
 * @property string $email_empleado
 * @property string $password_empleado
 * @property string $perfilsap_empleado
 * @property string $coord_gcia_empleado
 * @property string $extension_empleado
 * @property string $celular_empleado
 * @property string $nombre_empleado
 * @property string $cedula_empleado
 * @property string $supervisor_empleado
 * @property string $poo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property Rol[] $auditoria.rols
 * @property ObservacionesConsultor[] $observacionesConsultors
 * @property LiderObservacionHistorial[] $liderObservacionHistorials
 * @property ObservacionesUnidadConsultor[] $observacionesUnidadConsultors
 * @property Unidad $idUnidad
 */
class Empleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_unidad, primerapellido_empleado, segundoapellido_empleado, nombrecompleto_empleado, email_empleado, password_empleado, perfilsap_empleado, coord_gcia_empleado, extension_empleado, celular_empleado, nombre_empleado, cedula_empleado, supervisor_empleado', 'required'),
			array('id_unidad', 'numerical', 'integerOnly'=>true),
			array('primerapellido_empleado, segundoapellido_empleado, nombrecompleto_empleado, email_empleado, password_empleado, perfilsap_empleado, coord_gcia_empleado, extension_empleado, celular_empleado, nombre_empleado, cedula_empleado, supervisor_empleado', 'length', 'max'=>255),
			array('poo, usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('fecha_creacion, fecha_actualizacion, fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_empleado, id_unidad, primerapellido_empleado, segundoapellido_empleado, nombrecompleto_empleado, email_empleado, password_empleado, perfilsap_empleado, coord_gcia_empleado, extension_empleado, celular_empleado, nombre_empleado, cedula_empleado, supervisor_empleado, poo, fecha_creacion, fecha_actualizacion, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'auditoria.rols' => array(self::MANY_MANY, 'Rol', 'empleado_rol(id_empleado, id_rol)'),
			'observacionesConsultors' => array(self::HAS_MANY, 'ObservacionesConsultor', 'id_consultor'),
			'liderObservacionHistorials' => array(self::HAS_MANY, 'LiderObservacionHistorial', 'id_supervisor'),
			'observacionesUnidadConsultors' => array(self::HAS_MANY, 'ObservacionesUnidadConsultor', 'id_empleado'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_empleado' => 'Id Empleado',
			'id_unidad' => 'Id Unidad',
			'primerapellido_empleado' => 'Primerapellido Empleado',
			'segundoapellido_empleado' => 'Segundoapellido Empleado',
			'nombrecompleto_empleado' => 'Nombrecompleto Empleado',
			'email_empleado' => 'Email Empleado',
			'password_empleado' => 'Password Empleado',
			'perfilsap_empleado' => 'Perfilsap Empleado',
			'coord_gcia_empleado' => 'Coord Gcia Empleado',
			'extension_empleado' => 'Extension Empleado',
			'celular_empleado' => 'Celular Empleado',
			'nombre_empleado' => 'Nombre Empleado',
			'cedula_empleado' => 'Cedula Empleado',
			'supervisor_empleado' => 'Supervisor Empleado',
			'poo' => 'Poo',
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

		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('primerapellido_empleado',$this->primerapellido_empleado,true);
		$criteria->compare('segundoapellido_empleado',$this->segundoapellido_empleado,true);
		$criteria->compare('nombrecompleto_empleado',$this->nombrecompleto_empleado,true);
		$criteria->compare('email_empleado',$this->email_empleado,true);
		$criteria->compare('password_empleado',$this->password_empleado,true);
		$criteria->compare('perfilsap_empleado',$this->perfilsap_empleado,true);
		$criteria->compare('coord_gcia_empleado',$this->coord_gcia_empleado,true);
		$criteria->compare('extension_empleado',$this->extension_empleado,true);
		$criteria->compare('celular_empleado',$this->celular_empleado,true);
		$criteria->compare('nombre_empleado',$this->nombre_empleado,true);
		$criteria->compare('cedula_empleado',$this->cedula_empleado,true);
		$criteria->compare('supervisor_empleado',$this->supervisor_empleado,true);
		$criteria->compare('poo',$this->poo,true);
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
	 * @return Empleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
