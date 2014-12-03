<?php

/**
 * This is the model class for table "auditoria.actividad".
 *
 * The followings are the available columns in table 'auditoria.actividad':
 * @property integer $id_actividad
 * @property integer $id_observaciones
 * @property integer $id_unidad
 * @property string $descripcion
 * @property string $nombre_actividad
 * @property string $fecha_fin
 * @property string $fecha_inicio
 * @property boolean $cerrada
 *
 * The followings are the available model relations:
 * @property Observaciones $idObservaciones
 * @property Unidad $idUnidad
 * @property ObservacionesUnidadConsultor[] $observacionesUnidadConsultors
 * @property AdjuntoSeguimiento[] $adjuntoSeguimientos
 */
class Actividad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.actividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_observaciones, id_unidad, descripcion, nombre_actividad, fecha_fin, fecha_inicio, cerrada', 'required'),
			array('id_observaciones, id_unidad', 'numerical', 'integerOnly'=>true),
			array('descripcion, nombre_actividad', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_actividad, id_observaciones, id_unidad, descripcion, nombre_actividad, fecha_fin, fecha_inicio, cerrada', 'safe', 'on'=>'search'),
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
			'idObservaciones' => array(self::BELONGS_TO, 'Observaciones', 'id_observaciones'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
			'observacionesUnidadConsultors' => array(self::HAS_MANY, 'ObservacionesUnidadConsultor', 'id_actividad'),
			'adjuntoSeguimientos' => array(self::HAS_MANY, 'AdjuntoSeguimiento', 'id_actividad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_actividad' => 'Id Actividad',
			'id_observaciones' => 'Id Observaciones',
			'id_unidad' => 'Id Unidad',
			'descripcion' => 'Descripcion',
			'nombre_actividad' => 'Nombre Actividad',
			'fecha_fin' => 'Fecha Fin',
			'fecha_inicio' => 'Fecha Inicio',
			'cerrada' => 'Cerrada',
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

		$criteria->compare('id_actividad',$this->id_actividad);
		$criteria->compare('id_observaciones',$this->id_observaciones);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('nombre_actividad',$this->nombre_actividad,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('cerrada',$this->cerrada);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actividad the static model class
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
