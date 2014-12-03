<?php

/**
 * This is the model class for table "auditoria.informe".
 *
 * The followings are the available columns in table 'auditoria.informe':
 * @property integer $id_informe
 * @property integer $id_tipo_auditoria
 * @property integer $id_estado
 * @property string $fecha_creacion
 * @property string $fecha_periodo_auditoria
 * @property boolean $cerrada
 * @property string $codigo
 * @property string $nombre
 * @property string $propietario
 * @property string $fecha_emision
 * @property integer $ano
 *
 * The followings are the available model relations:
 * @property TipoAuditoria $idTipoAuditoria
 * @property Estado $idEstado
 * @property Observaciones[] $observaciones
 * @property Estado[] $auditoria.estados
 * @property AdjuntosInforme[] $adjuntosInformes
 */
class Informe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.informe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo_auditoria, id_estado, fecha_creacion, fecha_periodo_auditoria, cerrada, codigo, nombre, propietario, fecha_emision, ano', 'required'),
			array('id_tipo_auditoria, id_estado, ano', 'numerical', 'integerOnly'=>true),
			array('codigo, nombre, propietario', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_informe, id_tipo_auditoria, id_estado, fecha_creacion, fecha_periodo_auditoria, cerrada, codigo, nombre, propietario, fecha_emision, ano', 'safe', 'on'=>'search'),
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
			'idTipoAuditoria' => array(self::BELONGS_TO, 'TipoAuditoria', 'id_tipo_auditoria'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'observaciones' => array(self::HAS_MANY, 'Observaciones', 'id_informe'),
			'auditoria.estados' => array(self::MANY_MANY, 'Estado', 'estado_informe(id_informe, id_estado)'),
			'adjuntosInformes' => array(self::HAS_MANY, 'AdjuntosInforme', 'id_informe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_informe' => 'Informe',
			'id_tipo_auditoria' => 'Tipo Auditoria',
			'id_estado' => 'Estado',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_periodo_auditoria' => 'Fecha Periodo Auditoria',
			'cerrada' => 'Cerrada',
			'codigo' => 'Codigo',
			'nombre' => 'Nombre',
			'propietario' => 'Propietario',
			'fecha_emision' => 'Fecha Emision',
			'ano' => 'Ano',
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

		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('id_tipo_auditoria',$this->id_tipo_auditoria);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_periodo_auditoria',$this->fecha_periodo_auditoria,true);
		$criteria->compare('cerrada',$this->cerrada);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('propietario',$this->propietario,true);
		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		$criteria->compare('ano',$this->ano);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informe the static model class
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
